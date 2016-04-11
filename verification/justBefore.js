function checkEverything(){
  if(uname_good && pass_good && email_good){
    $('#sign_up').attr('action', 'verification/forum.php');
    $('#sub').submit();
  } else {
    $('#error').html('Read the other error_messages and fix it.')
  }
}
