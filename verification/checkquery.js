var email_good = false;
var uname_good = false;
var pass_good = false;
$(document).ready(function() {

        //the min chars for username
        const min_chars = 5;
        const max_chars = 20;

        //result texts
        const characters_error = 'Minimum amount of chars is 5';
        const max_character_error = 'Maximum amount of chars is 20'
        const checking_html = 'Checking...';


        $('#uemail').keyup(function(){
        if(isValidEmailAddress($('#uemail').val())){
          $('#emailcheckresult').html('Checking');
          check_email_availability();
        } else {
          $('#emailcheckresult').html('Not a valid email address');
          email_good = false;
        }
        });


        //when typed
        $('#uname').keyup(function(){
            //run the character number check
            if($('#uname').val().length < min_chars){
                //if it's bellow the minimum show characters_error text '
                $('#unamecheckresult').html(characters_error);
                uname_good=false;
            }else if($('#uname').val().length > max_chars){
                $('#unamecheckresult').html(max_character_error);
                uname_good=false;
            }else{
                //else show the cheking_text and run the function to check
                $('#unamecheckresult').html(checking_html);
                check_uname_availability();
            }
        });

  });

//function to check username availability
function check_uname_availability(){

        //get the username
        var uname = $('#uname').val();

        //use ajax to run the check
        $.post("checkuname.php", { uname: uname },
            function(result){
                //if the result is 1
                if(result == 1){
                    //show that the username is available
                    $('#unamecheckresult').html(uname + ' is Available');
                    uname_good=true;
                }else{
                    //show that the username is NOT available
                    $('#unamecheckresult').html(uname + ' is not Available');
                    uname_good=false;
                }
        });

}


function isValidEmailAddress(emailAddress) {
  var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  return pattern.test(emailAddress);
};

function check_email_availability(){

        //get the email
        var uemail = $('#uemail').val();

        //use ajax to run the check
        $.post("checkemail.php", { uemail: uemail },
            function(result){
                //if the result is 1
                if(result == 1){
                    //show that the username is available
                    $('#emailcheckresult').html(uemail + ' is Available');
                    email_good = true;
                }else{
                    //show that the username is NOT available
                    $('#emailcheckresult').html(uemail + ' is not Available');
                    email_good = false;
                }
        });

}
