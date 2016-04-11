<?php
include_once 'menu_bar.php';
include_once 'MIDDLEMAN.php';
?>

<html>
<head>
<script src="jscript\jquery-2.2.1.min.js"></script>
<script src="ShoppinAuto.js"></script>

</head>
<body>
        <h2>Your Favourite Recipes:</h2><br>


<?php
//require_once 'vendor/autoload.php';

$query = "SELECT * FROM users INNER JOIN favourites ON users.username=favourites.username WHERE username =".$_SESSION['username'];   //change this to match your code
$result = mysqli_query($conn, $query);

// $rows = array();
  while ($row = mysqli_fetch_assoc($result)) {
        echo $row['recipe'] . '<br />';
    };


//$_POST["Recipe_Name"]

?>

<script> src="ms/js/search.js" type="text/javascript"></script>
</body>
</html>
