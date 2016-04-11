var ingredients_list = new Array();
function fetch_select(val) {

  $.ajax({
    type: 'post',
    url: 'ingredients_list.php',
    data: {
      get_ingredient: val
    },
    success: function(response) {

      document.getElementById("select1").innerHTML = response;
    }
  });
}


$('.add').on('click', function() {
  var options = $('#select1 option:selected').sort().clone();
  $('#select2').append(options);
  for (var i = 0; i < options.length; i++) {
    ingredients_list.push(options[i].text);
  }



});

$('.remove').on('click', function() {
  $('#select2 option:selected').remove();
  for (var i = 0; i < options.length; i++) {
    ingredients_list.shift(options[i].text);
  }

});
$('.removeAll').on('click', function() {
  $('#select2').empty();
  ingredients_list = new Array();
});

$('.submit').on('click',function() {

  var select2 = ingredients_list;
  $.ajax({
    url: "recipe_list.php?select2=" + select2,
    cache: false,
    success: function(result) {
      document.getElementById('r1').style.visibility = 'visible';
document.getElementById("recipes").innerHTML = result;

    }
  });
});
