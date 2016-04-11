<!DOCTYPE html>

<html>
<head>
<title>Recipe Search</title> </head>
<body>
<h2> Please search for a type of cuisine </h2>
<form action="Recipe_Search1.php" method = "POST">
    <input type="text" name="Recipe">
    <button type="submit">Search</button>
  </form>

<?php
require_once 'vendor/autoload.php';
require_once 'unirest-php-master / src / Unirest.php/Unirest.php';

if (!empty($_POST['Recipe'])){

  $recipe = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/search?cuisine=".urlencode($_POST['Recipe'])."&limitLicense=true&number=25&offset=0&query=<required>"),
  array( "X-Mashape-Key" => "5XZi1Y5CGLmshy4xAUyBWmMF8tGJp1t8GfGjsn877fm4BEt8Fj"));
}

$recipe= json_decode($recipe);

foreach($recipe->results as $printout)
 echo $printout->title;


?>

</body>
</html>
