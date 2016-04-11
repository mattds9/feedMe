<?php
$conn = mysqli_connect('127.0.0.1', 'ameensha_matt', 'abc123!123', 'ameensha_users');
$email = $_POST['uemail'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sex = $_POST['sex'];
$username = $_POST['uname'];
$feet = $_POST['feet'];
$inches = $_POST['inches'];
$weight = $_POST['weight'];
$age = $_POST['age'];
$pword = md5($_POST['password']);
$fit = $_POST['fitness'];
$height = (12*$feet) + $inches;
$calorie_need = 0.0;
if($sex === "male"){
  $calorie_need = 12.7*$height+6.23*$weight-6.8*$age+66;
} else {
  $calorie_need = 4.7*$height+4.35*$weight-4.7*$age+655;
}
$multiplier = 1;
switch ($switch) {
        case 'sedentary':
            $multiplier = 1.2;
            break;
        case 'light':
        $multiplier = 1.375;
        break;
        case 'moderate':
        $multiplier = 1.55;
        break;
        case 'very':
        $multiplier = 1.725;
        break;
        case 'extreme':
        $multiplier = 1.9;
        break;
    }
    $calorie_need *= $multiplier;
$sql = "INSERT INTO `users`( `username`, `first`, `last`, `email`, `password`, `height`, `weight`, `sex`, `fitness`, `calorie_need`)
 VALUES ('$username','$fname','$lname','$email','$pword',$height,$weight,'$sex','$fit',$calorie_need)";
 $result = mysqli_query($conn, $sql);
if ($result === false) {
    die("Error signing up: " . $conn->error);
}
header("Location: ../login.php");
 ?>
