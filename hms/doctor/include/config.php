<?php
define('DB_SERVER','localhost');
define('DB_USER','hms');
define('DB_PASS' ,'zJh2066c&');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>