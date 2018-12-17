<?php
class WebsiteUser {
	/* Host address for the database */
	protected static $DB_HOST = "127.0.0.1";
	/* Database username */
	protected static $DB_USERNAME = "dabhcom_eatery";
	/* Database password */
	protected static $DB_PASSWORD = "m$2Szghm9*e";
	/* Name of database */
	protected static $DB_DATABASE = "dabhcom_eatery";
	private $username;
	private $password;
	private $mysqli;
	private $dbError;
	private $authenticated = false;
	function __construct() {
		$this->mysqli = new mysqli ( self::$DB_HOST, self::$DB_USERNAME, self::$DB_PASSWORD, self::$DB_DATABASE );
		if ($this->mysqli->errno) {
			$this->dbError = true;
		} else {
			$this->dbError = false;
		}
	}
	public function authenticate($username, $password) {
		$loginQuery = "SELECT * FROM users WHERE username = ? AND password = ?";
		$stmt = $this->mysqli->prepare ( $loginQuery );
		$stmt->bind_param ( 'ss', $username, $password );
		$stmt->execute ();
		$result = $stmt->get_result ();
		if ($result->num_rows == 1) {
			$this->username = $username;
			$this->password = $password;
			$this->authenticated = true;
		}
		$stmt->free_result ();
	}
	public function isAuthenticated() {
		return $this->authenticated;
	}
	public function hasDbError() {
		return $this->dbError;
	}
	public function getUsername() {
		return $this->username;
	}
}
?>

