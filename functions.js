var intolerance_list = new Array();
function selection(url){
  window.location.href = "display.php?id=" + url;
}
// function pagen(displayAmount){
//   $.ajax({
//     type: 'post',
//     url: 'sessionChanger.php',
//     data: {
//       displayAmount: displayAmount
//     },
//     success: function(response) {
//       Location.reload();
//     }
//   });
// }
// function page(offset){
//   $.ajax({
//     type: 'post',
//     url: 'sessionChanger.php',
//     data: {
//       offset: offset
//     },
//     success: function(response) {
//       Location.reload();
//     }
//   });
// }
// $('.submit').on('click', function(){
// var diet = $('#diet option:selected').text;
// $.ajax({
//   type: 'get',
//   url: 'sessionChanger.php',
//   data: {
//     diet:diet
//   }
// });
// })
// $('.submit').on('click', function(){
// var intolerances = $('#intolerances option:selected').sort().clone();
// for (var i = 0; i < intolerances.length; i++) {
//   intolerance_list.push(intolerances[i].text);
// }
// $.ajax({
//   type: 'get',
//   url: 'sessionChanger.php',
//   data: {
//     intolerances:intolerance_list
//   }
// });
// })
$('.submit').on('click',function() {

  var query = $('#query').val();
  $.ajax({
    url: "sessionChanger.php?query=" + query,
    cache: false,
    success: function(result) {

    }
  });
});
