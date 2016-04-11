$(document).ready(function() {


$('#swank').keyup(function(){
    AutoComplete();
    }
});

});
function AutoComplete(){

        //get the username
        var swank = $('#swank').val();

        //use ajax to run the check
        $.post("ShoppingList.php", { uname: uname },
            function(result){
                //if the result is 1
                if(result == 0){
                    //show that the username is available
                    $('#unamecheckresult').html('No Matches');
                }else{
                    //show that the username is NOT available
                    $('#unamecheckresult').html(uname + ' is not Available');
                }
        });

}
