<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "mars registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
