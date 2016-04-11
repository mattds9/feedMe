<?php
include 'recipe_list.php' ;

include 'MIDDLEMAN.php';

$RecipeTake = $_POST['Recipe_Name'];
$user = $_SESSION['username'];
//USER here is the TABLE
mysqli_query($conn, "INSERT INTO favourites VALUES ('$user', '$RecipeTake')");

?>
