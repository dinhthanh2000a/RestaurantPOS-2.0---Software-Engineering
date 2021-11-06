$(document).ready(function(){

    $("#username").keyup(function(){
        var user = $(this).val();
        $.post("./RegisterController/checkUsername",{username:user},function(data){
            $("#messageUn").htmt(data);
        })
    })
});