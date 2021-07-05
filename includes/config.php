<?php 

$server = "sql6.freesqldatabase.com";
$user = "sql6422234";
$pass = "QRLTDj9Ymk";
$database = "sql6422234";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>