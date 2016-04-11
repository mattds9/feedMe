<?php
include_once('menu_bar.php');
?>
<html>
<script src="functions.js"></script>

<aside style ='position:relative;'>
  <div class="ex1" style="max-width:100%;">

    <input onkeyup="fetch_select(this.value);" id="search" class="search_ing" />
    <br>

    <select multiple="multiple" id="select1" size="20" style="max-width:90%;"></select>
    <select multiple="multiple" id="select2" size="20" style="max-width:90%;" ></select>
<?php if (isset($_SESSION['username'])) { ?>
    <br>
    <!-- <select id="diet">
      <option value='none'>none</option>
      <option value='pescetarian'>pescetarian</option>
      <option value='lacto vegetarian'>lacto vegetarian</option>
      <option value='ovo vegetarian'>ovo vegetarian</option>
      <option value='vegan'>vegan</option>
      <option value='paleo'>paleo</option>
      <option value='primal'>primal</option>
      <option value='vegetarian'>vegetarian</option>
    </select>
    <select multiple="multiple" id="intolerances">
      <option value='none'>none</option>
      <option value='dairy'>dairy</option>
      <option value='egg'>egg</option>
      <option value='peanut'>peanut</option>
      <option value='sesame'>sesame</option>
      <option value='seafood'>seafood</option>
      <option value='shellfish'>shellfish</option>
      <option value='soy'>soy</option>
      <option value='sulfite'>sulfite</option>
      <option value='tree nut'>tree nut</option>
      <option value='wheat'>wheat</option>
    </select><br> -->
    <input type="text" name='query' id='query'>
    <?php
  }
  ?>
    <br>
    <button class="add">Add</button>
    <button class="remove">Remove</button>
    <button class="removeAll">Remove All</button>
    <button class='submit'>Submit</button>

  </div>



</aside>
<aside id='r1' style="visibility: hidden;">
  <div id='test'>
  </div>
  <div id="recipes">

  </div>

</aside>

  <script src='functions.js'></script>
  <script src="ms/js/search.js" type="text/javascript"></script>

  </html>
