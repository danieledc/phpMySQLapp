<?php
$servername = "_servername_";
$username = "_username_";
$password = "_password_";
$dbname = "_dbname_";

$conn = mysqli_connect($servername, $username, $password,$dbname );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
