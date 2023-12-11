<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "grantingsystem";

$conn = new mysqli($servername, $username, $password);

include("createusers.php");
?>
