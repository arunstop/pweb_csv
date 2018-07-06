<?php
$conn = mysqli_connect("localhost", "root", "", "web_csv");
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>