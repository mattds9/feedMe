<?php
session_start();
$conn = mysqli_connect('127.0.0.1', 'ameensha_matt', 'abc123!123', 'ameensha_users');

//get the username
$uname = $_POST['uname'];
$sql = 'SELECT * from users where username = "'. $uname .'"';
//mysql query to select field username if it's equal to the username that we check '
$result = mysqli_query($conn, $sql);
 //users can be renamed if you want.

//if number of rows fields is bigger them 0 that means it's NOT available '
if($result->num_rows > 0){
    //and we send 0 to the ajax request
    echo 0;
}else{
    //else if it's not bigger then 0, then it's available '
    //and we send 1 to the ajax request
    echo 1;
}  ?>
