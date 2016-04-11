<?php
include_once('menu_bar.php');
 ?>
 <html>
 <aside style ='position:relative;'>
   <div class="ex1" style="max-width:100%;">

     <input onkeyup="fetch_select(this.value);" id="search" class="search_ing" />
     <br>

     <select multiple="multiple" id="select1" size="20" style="max-width:90%;"></select>
     <select multiple="multiple" id="select2" size="20" style="max-width:90%;" ></select>

     <br>
     <button class="add">Add</button>
     <button class="remove">Remove</button>
     <button class="removeAll">Remove All</button>
     <button class='submit'>Submit</button>
   </div>
   </html>
