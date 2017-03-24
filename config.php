<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1234';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'test';
mysql_select_db($dbname);
?>