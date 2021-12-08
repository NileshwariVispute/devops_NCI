<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**	
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'testdb.cp0j8kjw11ud.us-east-1.rds.amazonaws.com';
$databaseName = 'test';
$databaseUsername = 'neha';
$databasePassword = '12345678';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
