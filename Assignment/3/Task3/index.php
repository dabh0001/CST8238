<?php include("header.php"); ?>
<?php include("class_lib.php"); ?>

            <div id="content" class="clearfix">
                <aside>
                         <h2><?php echo date("l") . "'s"; ?> Specials</h2> <!-- Step6  -->
                        <hr>                        
                        <h3>The WP Burger</h3>
                        <p>Freshly made all-beef patty served up with homefries - $14</p>
                        <hr>
                        <h3>WP Kebobs</h3>
                        <p>Tender cuts of beef and chicken, served with your choice of side - $17</p>
                        <hr>
                        <h2>Private Dining</h2>                        
                        <p>Call us to find out more about our private dinning options.</p>
                </aside>
                <div class="main">
                    <h1>Welcome to WP Eatery!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h3>Upcoming Events ...</h3>
                    <p>
                    
                    <?php
                           $event1 = new EventItem("St. Patty's Day Party","Tuesday March 17, 2015","Join us for an authentic Irish four course meal, complete with shepard's pie and one green beer!","$35.00"); //Step 4
                           echo "<strong class=event>" . $event1->get_eventName() . "</strong><br/>"; //Step 4
                           echo "<strong>"."Date:" ."</strong>". $event1->get_eventDate()."<br/>"; //Step 4
                           echo "<strong>"."Price:" ."</strong>". $event1->get_eventPrice()."<br/>"; //Step 4
                           echo  $event1->get_eventDesc(); //Step 4                          
                           
                     ?>
                     </p>
                      <p>
                    <?php
                           $event2 = new EventItem("Samy's Spring Fling!","Saturday April 18, 2015","Join us for to kick off the beginning of spring! This event will include 4 of Samy's infamous appetizers and one cocktail!","$40.00"); //Step 4
                           echo "<strong class=event>" . $event2->get_eventName() . "</strong><br/>"; //Step 4
                           echo "<strong>"."Date:" ."</strong>". $event2->get_eventDate()."<br/>"; //Step 4
                           echo "<strong>"."Price:" ."</strong>". $event2->get_eventPrice()."<br/>"; //Step 4
                           echo  $event2->get_eventDesc(); //Step 4                           
                           
                     ?>
                     </p>
                    
                    <h2>Book your Private Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div><!-- End Main -->
            </div><!-- End Content -->
            
            <?php include("footer.php"); ?>
