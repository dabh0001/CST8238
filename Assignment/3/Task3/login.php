<?php
include ("header.php");
require ("db_config.php");
require_once ('WebsiteUser.php');
session_start ();

$error = "";

if (! isset ( $_POST ["username"] ) || ! isset ( $_POST ["password"] )) {
	$error = " Please fill in all the following information";
} else {
	if ($_POST ["username"] != "" && $_POST ["password"] != "") {
		$connection = mysqli_connect ( $host, $username, $password, $database );
		
		if (mysqli_connect_errno ()) {
			die ( "Failed to connect to database: " . mysqli_connect_error () );
		}
		
		$query = 'SELECT * FROM  adminusers WHERE Username LIKE  "' . $_POST ["username"] . '%" AND Password LIKE  "' . $_POST ["password"] . '%"';
		$count = mysqli_query ( $connection, $query );
		
		if (mysqli_num_rows ( $count ) != 0) {
			
			$_SESSION ["username"] = $_POST ["username"];
			$_SESSION ['password'] = $_POST ["password"];
			
			echo "<script type='text/javascript'>window.top.location='http://dabh0001.com/CST8238/Assignment3/Restaurant/internal.php';</script>";
			exit ();
		} else {
			echo '<div id="content" class="clearfix">';
			echo '<h3 style="color:red;">Password not correct.';
			echo '</div>';
			include ("footer.php");
		}
	}
	
	if (isset ( $_SESSION ['websiteUser'] )) {
		if ($_SESSION ['websiteUser']->isAuthenticated ()) {
			session_write_close ();
			header ( 'Location:restricted.php' );
		}
	}
	
	$missingFields = false;
	if (isset ( $_POST ['submit'] )) {
		if (isset ( $_POST ['username'] ) && isset ( $_POST ['password'] )) {
			if ($_POST ['username'] == "" || $_POST ['password'] == "") {
				$missingFields = true;
			} else {
				// All fields set, fields have a value
				$websiteUser = new WebsiteUser ();
				if (! $websiteUser->hasDbError ()) {
					$username = $_POST ['username'];
					$password = $_POST ['password'];
					$websiteUser->authenticate ( $username, $password );
					if ($websiteUser->isAuthenticated ()) {
						$_SESSION ['websiteUser'] = $websiteUser;
						header ( 'Location:restricted.php' );
					}
				}
			}
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login</title>
</head>
<body>
	<!-- MESSAGES -->
        <?php
								// Missing username/password
								if ($missingFields) {
									echo '<h3 style="color:red;">Please enter both a username and a password</h3>';
								}
								
								// Authentication failed
								if (isset ( $websiteUser )) {
									if (! $websiteUser->isAuthenticated ()) {
										echo '<h3 style="color:red;">Login failed. Please try again.</h3>';
									}
								}
								?>
        <div id="content" class="clearfix">
		<form name="login" id="login" method="post"
			action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" id="submit" value="Login"></td>
					<td><input type="reset" name="reset" id="reset" value="Reset"></td>
				</tr>
			</table>
			<br /> <br />
		</form>
		<?php echo '<p>Session ID: ' . session_id() . '</p>';?>
	</div>
        
        <?php include("footer.php"); ?>
    </body>
</html>