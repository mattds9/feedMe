<?php
include_once('menu_bar.php');
?>
<html>
<img src="http://pinkpolkadotcreations.com/wp-content/uploads/2012/01/My-Recipes-000-Page-1.jpg" class="masterTooltip" style="width:300px" title="Use our search engine to professionally create recipes! Have fun and B. Good friends" />
<script>
$(document).ready(function() {
// Tooltip only Text
$('.masterTooltip').hover(function(){
        // Hover over code
        var title = $(this).attr('title');
        $(this).data('tipText', title).removeAttr('title');
        $('<p class="tooltip"></p>')
        .text(title)
        .appendTo('body')
        .fadeIn('slow');
}, function() {
        // Hover out code
        $(this).attr('title', $(this).data('tipText'));
        $('.tooltip').remove();
}).mousemove(function(e) {
        var mousex = e.pageX + 20; //Get X coordinates
        var mousey = e.pageY + 10; //Get Y coordinates
        $('.tooltip')
        .css({ top: mousey, left: mousex })
});
});
</script>
<aside>

<div class="AboutProject">
<p style="text-decoration: underline"><b>About our Project:</b></p>

<p>3 Spicy <b>Jalapeno Ameens</b></p>
<p>16 ounces of <b>Sweet Baby Ross</b></p>
<p>25 grams of <b>Matthew de Leeuw herb and spice</b></p>
<p>3.5 <b>Habenero Maxwell Marchands</b></p>
<p>Half a pinch of <b>Alex Shaw</b></p>
</div>
  <script src="ms/js/search.js" type="text/javascript"></script>
  </html>
