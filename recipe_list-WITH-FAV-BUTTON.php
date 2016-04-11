<?php

require_once 'vendor/autoload.php';
$ingredients=$_GET['select2'];

if(!isset($_SESSION['maxcalories'])){

$Options = Unirest\Request::jsonOpts(true);
$response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/findByIngredients?ingredients=".$ingredients."&limitLicense=false&number=25&ranking=1",
array(
  "X-Mashape-Key" => "5XZi1Y5CGLmshy4xAUyBWmMF8tGJp1t8GfGjsn877fm4BEt8Fj",
  "Accept" => "application/json"
), $Options
);

    for ($i = 0; $i < count($response->body); $i++) {
       echo "<div id = \"".$response->body[$i][id]."\" onclick=\"selection(this.id)\" class = \"selection\">";
       echo "<p>".$response->body[$i][title]."</p> <br>";
       echo "<img src=\"".$response->body[$i][image]."\" style=\"height:200px;\"><br>";
       echo "</div>";
   }
   echo "<h1>Sign Up for more recipes, diet options, and a display for your health</h1>";
} else {

if(!isset($_SESSION['number'])){
  $_SESSION['number'] = 25;
}
$url = 'https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?includeIngredients='.$ingredients.'&limitLicense=false&ranking=2&number='$_SESSION['number'].'&maxCalories='.$_SESSION['maxcalories'].'&maxCarbs='.$_SESSION['maxcarbs'].'&maxFat='.$_SESSION['maxfat'].'&maxProtein='.$_SESSION['maxprotein'];
if(isset($_SESSION['diet'])){
  $url = join($url, '&diet='.$_SESSION['diet']));
}
if(isset($_SESSION['intolerances'])){
  $url = join($url, '&intolerances='.$_SESSION['intolerances']));
}
if(isset($_SESSION['offset'])){
  $url = join($url, '&offset='.$_SESSION['offset']));
}

  $Options = Unirest\Request::jsonOpts(true);
  $response = Unirest\Request::get($url,
  array(
    "X-Mashape-Key" => "5XZi1Y5CGLmshy4xAUyBWmMF8tGJp1t8GfGjsn877fm4BEt8Fj",
    "Accept" => "application/json"
  ), $Options
  );

  for ($i = 0; $i < count($response->body); $i++) {
     echo "<div id = \"".$response->body[$i][id]."\" onclick=\"selection(this.id)\" class = \"selection\">";
     echo "<p>".$response->body[$i][title]."</p> <br>";
     echo "<img src=\"".$response->body[$i][image]."\" style=\"height:200px;\"><br>";
     echo "<input type = 'button' id='".$response->body[$i][id]."' name = 'AddtoFav' onclick= AddtoFavo(this.id)>";
     echo "</div>";

 }
 echo '<span style=\'font-size:10; text-decoration:underline; color:blue; cursor:pointer;\'><span onclick=\'pagen(25)\'>25</span><span onclick=\'pagen(50)\'>50</span><span onclick=\'pagen(100)\'>100</span></span>';
  for ($i=0; $i < 900; $i+=$_SESSION['number']) {
    echo "<span style='font-size:10; text-decoration:underline; color:blue; cursor:pointer;' onclick='page(".$i")'>".$i/$_SESSION['number']."&nbsp</span>";
  }
}


?>
<script>

function AddtoFavo(id){
  $.ajax({
    type: 'post',
    url: "FavouritesList.php",
    data:
      Recipe_Name: id;
    success: function(response) {
document.getElementById(id).innerHTML = response;

    }
}

</script>
