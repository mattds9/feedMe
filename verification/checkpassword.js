function chkPasswordStrength(txtpass,strenghtMsg,errorMsg)
   {
     var desc = new Array();
     desc[0] = "Very Weak";
     desc[1] = "Weak";
     desc[2] = "Better";
     desc[3] = "Medium";
     desc[4] = "Strong";
     desc[5] = "Strongest";

     errorMsg.innerHTML = '';
     var score   = 0;

     //if txtpass bigger than 6 give 1 point
     if (txtpass.length > 8) score++;

     //if txtpass has both lower and uppercase characters give 1 point
     if ( ( txtpass.match(/[a-z]/) ) && ( txtpass.match(/[A-Z]/) ) ) score++;

     //if txtpass has at least one number give 1 point
     if (txtpass.match(/\d+/)) score++;

     //if txtpass has at least one special caracther give 1 point
     if ( txtpass.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

     //if txtpass bigger than 12 give another 1 point
     if (txtpass.length > 12) score++;

     strenghtMsg.innerHTML = desc[score];
     strenghtMsg.className = "strength" + score;

     if (txtpass.length < 8)
     {
     errorMsg.innerHTML = "Password Should be Minimum 8 Characters"
     errorMsg.className = "errorclass"
     }
     if(txtpass.length < 8 || score<2){
       pass_good=false;
     } else {
       pass_good=true;
     }


   }
