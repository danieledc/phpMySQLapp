<?php
$servername = "_servername_";
$username = "_username_";
$password = "_password_";
$dbname = "_dbname_";

$bookconn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$bookconn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
