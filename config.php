<?php

$host = "localhost"; /* Host name */
$user = "admin"; /* User */
$password = "admin@123"; /* Password */
$dbname = "tutorial"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}