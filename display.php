<?php
include_once('menu_bar.php');
require_once 'vendor/autoload.php';

 $Options = Unirest\Request::jsonOpts(true);
 $id = $_GET['id'];
$response = Unirest\Request::get('https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/'.$id.'/information?includeNutrition=false',
  array(
    'X-Mashape-Key' => '5XZi1Y5CGLmshy4xAUyBWmMF8tGJp1t8GfGjsn877fm4BEt8Fj',
  ), $Options);
echo '<span style = "font-size:18px; color: white; font-family: "Impact, Charcoal, sans-serif";>';
echo  '<h1>'.$response->body[title].'</h1><br>';
echo "<img src='".$response->body[image]."'><br>";
print "Preparation time: ";
echo $response->body[readyInMinutes].'<br>';

?>

<form action="someform.php" method="get">

<p>Ingredients: </p>
<?php


for ($i = 0; $i < count($response->body[extendedIngredients]); ++$i) {
    ?>
  <input type="checkbox" value="<?php echo
  $response->body[extendedIngredients][$i][name]?>">

  <?php echo $response->body[extendedIngredients][$i][amount].' '.$response->body[extendedIngredients][$i][unit].' '.$response->body[extendedIngredients][$i][name]?> </input> <br>



<?php

}

echo '<br><input type="submit" />';
echo '</form>';
print "For full Recipe, please follow this link: <br>";
print '<a href="'.$response->body[sourceUrl].'">'.$response->body[sourceUrl].'</a><br>';
echo '</span>';
 ?>
