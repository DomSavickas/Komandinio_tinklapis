$(document)
    .on("submit", "form.js-register", function(event) {
        event.preventDefault();

        var $form = $(this);
        var $error = $(".js-error", $form);
        var $name = $(".name", $form);
        var $email = $(".email",$form);
        var $password = $(".password",$form);
        var $username = $(".username",$form);
        var $confirm_password = $(".comfirm-password",$form);

        var dataObj = {
            name: $name.val(),
            email: $email.val(),
            username: $username.val(),
            password: $password.val()
        };

        if(!ValidateEmail(dataObj.email)) {
            $error
                .text("Please enter a valid email address")
                .show();
            return false;
        } else if (dataObj.password.length < 8) {
            $error
                .text("Please enter a passphrase that is at least 8 characters long.")
                .show();
            return false;
        } else if ($password.val().localeCompare($confirm_password.val())!=0){
            $error
                .text("Password and comfirm password do not match")
                .show();
            return false
        }
        $error.hide();

        $.ajax({
            type: 'POST',
            url: '/ajax/register.php',
            data: dataObj,
            dataType: 'json',
            async: true,
        })
            .done(function ajaxDone(data) {
                // Whatever data is
                if(data.redirect !== undefined) {
                    window.location = data.redirect;
                } else if(data.error !== undefined) {
                    $error
                        .text(data.error)
                        .show();
                }
            })
            .fail(function ajaxFailed(e) {
                $error
                    .html("Connection problems")
                    .show();
            })
            .always(function ajaxAlwaysDoThis(data) {
                // Always do
                //console.log('Always');
            })

        return false;
    });
//Registration
var $pInput = $("#passwordImput"); //password
$confirmPInput = $("#confirmPasswordImput"); // comfir password
$doc = $(document);
$(".js-check").keyup(function(){
   $curentInput = $(this);
   if ($curentInput.val().length > 4){
       $curentInput.removeClass("is-invalid");
       $curentInput.addClass("is-valid");
   }else{
       $curentInput.removeClass("is-valid");
       $curentInput.addClass("is-invalid");
   }
});


function ValidateEmail(inputText)
{
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(inputText.match(mailformat))
    {
        return true;
    }
    else
    {
        return false;
    }
}
$pInput.change(function() {
    if ($pInput.val().length > 7){
        $pInput.removeClass("is-invalid");
        $pInput.addClass("is-valid");
        $confirmPInput.removeClass("is-valid");
        $confirmPInput.addClass("is-invalid");
    } else {
        $pInput.removeClass("is-valid");
        $pInput.addClass("is-invalid");
    }


});

$confirmPInput.keyup(function() {

    if ($pInput.val().localeCompare($confirmPInput.val()) == 0){
        $confirmPInput.removeClass("is-invalid");
        $confirmPInput.addClass("is-valid");

    } else{
        $confirmPInput.removeClass("is-valid");
        $confirmPInput.addClass("is-invalid");

    }

});

$doc.on("change", ".email",function(event){
    var $inputEmail = $(this);
    var $error =  $(".js-email-error");
    $error.hide();
    if (ValidateEmail($inputEmail.val())){
        $inputEmail.removeClass("is-invalid");
        $inputEmail.addClass("is-valid");

        var dataObj = {
            email: $inputEmail.val()
        };

        $.ajax({
            type: 'POST',
            url: '/ajax/checkifalreadyinuse.php',
            data: dataObj,
            dataType: 'json',
            async: true,
        })
            .done(function ajaxDone(data) {
                // Whatever data is
                if(data.redirect !== undefined) {
                    window.location = data.redirect;
                } else if(data.error !== undefined) {
                    $error
                        .text(data.error)
                        .show();
                }
            })
            .fail(function ajaxFailed(e) {
                $error
                    .html("Connection problems")
                    .show();
            })
            .always(function ajaxAlwaysDoThis(data) {
                // Always do
                //console.log('Always');
            });

    } else{
        $inputEmail.removeClass("is-valid");
        $inputEmail.addClass("is-invalid");
    }



});