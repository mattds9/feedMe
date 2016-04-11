<?php
include_once('menu_bar.php');
if(isset($_SESSION['LogInErrors'])) {
  echo '<p class=\'errorLog\'>'.$_SESSION['LogInErrors'].'</p>';
  unset($_SESSION['LogInErrors']);
}
?>
<html>
<form action='check.php' method='post'>
  Username:<input type='text' name='username'></input><br>
  Password:<input type='password' name='password'></input><br>
  <input type="submit"></input>
</form>
</html>
