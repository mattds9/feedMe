<?php
session_start();
require_once 'vendor/autoload.php';
$ingredients=$_GET['select2'];
if(!isset($_SESSION['username'])){

$Options = Unirest\Request::jsonOpts(true);
$response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/findByIngredients?ingredients=".$ingredients."&limitLicense=false&number=25&ranking=1",
array(
  "X-Mashape-Key" => "5XZi1Y5CGLmshy4xAUyBWmMF8tGJp1t8GfGjsn877fm4BEt8Fj",
  "Accept" => "application/json"
), $Options
);

    for ($i = 0; $i < count($response->body); $i++) {
       echo "<span id = \"".$response->body[$i][id]."\" onclick=\"selection(this.id)\" class = \"selection\">";
       echo "<p>".$response->body[$i][title]."</p> <br>";
       echo "<img src=\"".$response->body[$i][image]."\" style=\"height:200px;\"><br>";
       echo "</span><br>";
   }
   echo "<h1>Sign Up for more recipes, diet options, and a display for your health</h1>";
 }
else {

if(!isset($_SESSION['number'])){
  $_SESSION['number'] = 100;
}
$q = $_SESSION['query'];
$p = $_SESSION['maxProtein'];
$f = $_SESSION['maxFat'];
$mC = $_SESSION['maxCarbs'];
$mc = $_SESSION['maxcalories'];
$n = $_SESSION['number'];
$url = "https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?includeIngredients=$ingredients&limitLicense=false&maxCalories=$mc&maxCarbs=$mC&maxFat=$f&maxProtein=$p&number=$n&offset=0&query=$q&ranking=1";
// if(isset($_SESSION['diet'])){
//   $url = $url.'&diet='.$_SESSION['diet'];
// }
// if(isset($_SESSION['intolerances'])){
//   $url = $url.'&intolerances='.$_SESSION['intolerances'];
// }
// if(isset($_SESSION['offset'])){
//   $url = $url.'&offset='.$_SESSION['offset'];
// }
//echo $url;
  $Options = Unirest\Request::jsonOpts(true);
  $response = Unirest\Request::get($url,
  array(
    "X-Mashape-Key" => "MYlgyZwTALmsh1mQlncUoNic8a5yp1sidgZjsnGoQueys1SIEr",
    "Accept" => "application/json"
  ),  $Options
);
  for ($i=0; $i < count($response->body); $i++) {
    // echo $response->body[$i];
    // for ($j=0; $j < count($response->body[i]); $j++) {
    // echo  $response->body[$i][$j];
    // }
     echo "<span id = \"".$response->result[$i][id]."\" onclick=\"selection(this.id)\" class = \"selection\">";
     echo "<p>".$response->result[$i][title]."</p> <br>";
     echo "<img src=\"".$response->result[$i][image]."\" style=\"height:200px;\"><br>";
     echo "</span>";
 }
 // echo '<span style=\'font-size:10; text-decoration:underline; color:blue; cursor:pointer;\' onclick=\'pagen(25)\'>25</span>&nbsp<span style=\'font-size:10; text-decoration:underline; color:blue; cursor:pointer;\' onclick=\'pagen(50)\'>50</span>&nbsp<span style=\'font-size:10; text-decoration:underline; color:blue; cursor:pointer;\' onclick=\'pagen(100)\'>100</span>&nbsp';
 //  for ($i=0; $i < 900; $i+=$_SESSION['number']) {
 //    echo "<span style='font-size:10; text-decoration:underline; color:blue; cursor:pointer;' onclick='page(".$i.")'>".($i/$_SESSION['number']+1)."</span>&nbsp";
 //  }
}


?>
