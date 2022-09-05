
function chekFirstName()
{
    var firstNameVallue = $('#firstName').val();

    var regExp = /^[a-z-\.]{2,25}$/;
    if(regExp.test(firstNameVallue))
    {
        $('#firstNameError').text(' ');
        return true;
    }
    else
    {
        $('#firstNameError').text('Name Length must be in between 2 to 15 char');
        return false;
    }
}

function chekLastName()
{
    var lastNameValue = $('#lastName').val();
    if(lastNameValue.length>=5 && lastNameValue.length<=15)
    {
        $('#lastNameError').text(' ');
        return true;
    }
    else
    {
        $('#lastNameError').text('Name Length must be in between 5 to  15 char');
        return false;
    }
}

 function checkEmail()
 {
     var emailValue = $("#email").val();
     var regExp = /^[a-z-@\.]{2,15}$/;
     if(regExp.test(emailValue))
     {
         $('#emailError').text(' ');
         return true;
     }
     else
     {
         $('#emailError').text('Enter Email');
         return false;
     }
 }

function CheckPassLenError()
{
    var passValue = $("#password").val();
    if(passValue.length>=5 && passValue.length<=15)
    {
        $('#passlenError').text(' ');
        return true;
    }
    else
    {
        $('#passlenError').text('Password Length in between 5 to 15');
        return false;
    }
}

 function checkConfirmPass()
 {
     var passValue =  $('#password').val();
     var confirmPass = $('#confirmPassword').val();

     if(passValue == confirmPass)
     {
         $('#passError').text(' ');
         return true;
     }
     else
     {
         $('#passError').text('Password Unmatched');
         return false;
     }
 }





 $('#password').keyup(function () {
     CheckPassLenError();
 });

 $('#confirmPassword').keyup(function () {
    confirmPass();
 });


$('#email').keyup(function () {
    checkEmail();
});

$('#firstName').keyup(function () {
    chekFirstName();
});

$('#lastName').keyup(function () {
    chekLastName();
});




$('#register').submit(function () {
    if(chekLastName()==true && chekLastName()==true && checkEmail()==true && CheckPassLenError()==true && checkConfirmPass()==true)
    {
        return true;
    }
    else
    {
        return  false;
    }
});