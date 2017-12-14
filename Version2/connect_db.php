<?php
/* 
 * connect_db.php
 * 
 * file use to connect to database
 */

$dbc = mysqli_connect('localhost','coursedb_user','course_db','coursedb')
 or die('Error connecting to MySQL server.');

/* build connections with username and password */

?>
