<?php
session_start();
$conn = mysqli_connect('127.0.0.1', 'ameensha_matt', 'abc123!123', 'ameensha_users');
if(isset($_POST['username']) && isset($_POST['password'])){
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM users WHERE username = \"".$username."\"";  //table name after the FROM
$result = mysqli_query($conn, $sql);
if($result -> num_rows > 0){

  $res = $result->fetch_assoc();
  if($password === $res['password']){
    // if(isset($_SESSION['LogInErrors']){
    //   unset($_SESSION['LogInErrors']);
    // }
    $_SESSION["username"] = $username;
    $_SESSION["firstname"] = $fname;
    $_SESSION["lastname"] = $lname;
    $_SESSION["password"]= md5($password);
    $_SESSION['maxcalories'] = $res['calorie_need'];
    $_SESSION['maxCarbs'] = $_SESSION['maxcalories']*0.5;
    $_SESSION['maxFat'] = $_SESSION['maxcalories']*0.3;
    $_SESSION['maxProtein'] = $_SESSION['maxcalories']*0.2;
    header('Location: index.php'); //change to dashboard.php
  } else {
    $_SESSION["LogInErrors"] = "Username and Password don't match";
    header('Location: login.php');
  }
}
else {
  $_SESSION["LogInErrors"] = "Username and Password don't match";
  header('Location: login.php');
}} else {
  $_SESSION["LogInErrors"] = "Username and Password don't match";
  header('Location: login.php');
}
 ?>
