<?php
session_start();
if(isset($_SESSION['fname'])){
  echo '<h3 class=\'welcome\'>Welcome</h3><h5 class=\'welcome\'>'.$_SESSION['uname'].'</h5>';
}
 ?>
 <html>

 <head>
   <script src="ms/js/jquery-2.2.2.min.js"></script>
   <title>FeedMe Nutritional Application</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="main-style.css">
 </head>

<center>
 <body>
<div class="banner-left">
  <center class="banner-center">

  </center>
</div>

<div class="banner-right">

<center class="banner-center">

</center>

</div>
<center>
   <nav role="navigation">

     <ul>
       <li>
         <div> <img src="http://www.thisiscolossal.com/wp-content/uploads/2015/05/avacado-1.jpg" style="width:80px"></div>
       </li>
       <li><a href="index.php">Home</a></li>
       <li><a href="recipes.php">Recipes</a>
       </li>
       <li><a href="#">Your Profile</a>
         <ul>
           <li><a href="favs.php">Favourites</a></li>
           <li><a href="cart.php">Shopping Cart</a></li>
           <li><a href="stats.php">Profile Stats</a></li>
         </ul>
       </li>
       <li><a href="contact.php">Contact Us</a></li>
       <?php
       if(!isset($_SESSION['username'])) {
         echo '<li><a href=\'forum.php\'>Sign Up</a></li>';
         echo '<li><a href=\'login.php\'>Log In</a></li>';
       } else {
         echo '<li><a href=\'logout.php\'>Log Out</a></li>';
       }
       ?>
     </ul>
   </nav>
