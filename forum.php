<?php
include_once('menu_bar.php');
if(isset($_SESSION['SignUpErrors'])) {
  echo '<p class=\'errorLog\'>'.$_SESSION['SignUpErrors'].'</p>';
  unset($_SESSION['SignUpErrors']);
}
if(isset($_POST['uname'])){

}
?>

<html>
<script src="jscript\jquery-2.2.1.min.js"></script>
<script src="verification\checkquery.js"></script>
<script src="verification\checkpassword.js"></script>
<script src='verification\justBefore.js'></script>
<span id="error" class="errorclass"></span><br>
<form action='verification/forum.php' method="post" id='sign_up'>
First Name: <input type="text" name="fname" id="fname" required="true"><br>
Last Name: <input type="text" name="lname" id="lname" required="true"><br>
Username: <input type="text" name="uname" id="uname" required="true"><span id='unamecheckresult'></span><br>
E-mail: <input type="email" name="uemail" required="true" id="uemail"> <span id="emailcheckresult"></span><br>
<table>
<tr>
<td>
Password: <input id="user_password" type="password" maxlength="20" name="password"  onkeyup="chkPasswordStrength(this.value,document.getElementById('strendth'),document.getElementById('error'))" required="true">
</td>
<td id="strendth" class="strength5"><b>Password Strength</b></td>
</tr>
<tr>
  <td id='error' class='errorclass'></td>
</tr>
</table>
  <br>
Height: Feet:<input type="number" name="feet"min="0" max="8" required="true"><t>
Inches<input type="number" name="inches" min="0" max="11" required="true"><br>
Weight: <input type="number" name="weight" min="0" required="true"><br>
Sex:
<input type="radio" name="sex" value="male" required="true"> Male
<input type="radio" name="sex" value="female"> Female<br>
Excercise level: <a href="fitinfo.html" target="_blank"><img src="images\info.png" style="width:10px; height:10px;"></a><br>
<input type="radio" name="fitness" value="sedentary" required="true"> sedentary<br>
<input type="radio" name="fitness" value="light"> lightly active<br>
<input type="radio" name="fitness" value="moderate"> moderately active<br>
<input type="radio" name="fitness" value="very"> very active<br>
<input type="radio" name="fitness" value="extreme"> extremely active<br>
<input type="submit" id = 'submit' onclick="checkEverything()" name="submit" value="submit"></input>
</form>
</body>
</html>
