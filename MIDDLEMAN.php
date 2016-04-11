<?php

// Create connection

$conn = mysqli_connect('localhost', 'ameensha_matt', '4piR^2', 'ameensha_users');

//mysqli_select_db($conn, $dbname);

// Check connection
if ($conn === false) {
    die();
}

//$conn->close();
?>
