<?php
session_start();
if(isset($_GET['displayAmount'])){
  $_SESSION['number'] = $_GET['displayAmount'];

}  if(isset($_GET['offset'])){
  $_SESSION['offset'] = $_GET['offset'];
}  if (isset($_GET['diet'])){
  if($_GET['diet'] !== 'none'){
  $_SESSION['diet'] = $_GET['diet'];
} else {
  unset($_SESSION['diet']);
  }
} if (isset($_GET['intolerances'])){
  $tol = $_GET['intolerances'];
  if (isset($_SESSION['intolerances'])){
    foreach ($tol as $t) {
      if($t === 'none'){
        unset($_SESSION['intolerances']);
      }
      else {
        $_SESSION['intolerances'] = $_SESSION['intolerances'].$t;
      }
    }} else {if($t === 'none'){unset($_SESSION['intolerances']);} else{
      $_SESSION['intolerances'] = $tol[0];}
      if(count($tol)>1){
      for ($i=1; $i < count($tol); $i++) {
        if($t !== 'none'){
        $_SESSION['intolerances'] = $_SESSION['intolerances'].", ".$tol[$i];
      } else {
          unset($_SESSION['intolerances']);
        }
      }
    }
    }
    echo $_GET['query'];
    if (isset($_GET['query'])){
      $_SESSION['query'] = $_GET['query'];
    }





  // header('Location: recipes.php');
?>
