<?php
session_start();
require_once 'vendor/autoload.php';



 $Options = Unirest\Request::jsonOpts(true);
     $response = Unirest\Request::get('https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/ingredients/autocomplete?query=chicken', array(
   'X-Mashape-Key' => '5XZi1Y5CGLmshy4xAUyBWmMF8tGJp1t8GfGjsn877fm4BEt8Fj', ), $Options);

     for ($i = 0; $i < count($response->body); ++$i) {

       echo $response->body[$i][name]."<br>";

   }




if(isset($_POST['get_ingredient'])) {

  $state = $_POST['get_ingredient'];

$Options = Unirest\Request::jsonOpts(true);
    $response = Unirest\Request::get('https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/ingredients/autocomplete?query='.$state, array(
  'X-Mashape-Key' => '5XZi1Y5CGLmshy4xAUyBWmMF8tGJp1t8GfGjsn877fm4BEt8Fj', ), $Options);
$count = count($response->body);

    for ($i = 0; $i <count($response->body); ++$i) {
//echo "<option>helloo</option>";
       echo "<option value='".$response->body[$i][name]."'>".$response->body[$i][name]."</option>";
        //  echo "<option>hiiiiii";
   }

    exit;
}

?>
