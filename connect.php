<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "musicStream";

$conn = new mysqli($hostname,$username,$password,$database)or die(mysqli_connect_error());
