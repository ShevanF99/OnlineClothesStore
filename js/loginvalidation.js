$(document).ready(function(){

    $("form").submit(function(){
        var username = $("#loginusername").val();
        var password = $("#loginpassword").val();

        if(username==""){
            alert("Username Cannot Be Empty!!!");
            return false;
        }
        else if(password==""){
            alert("Password Cannot Be Empty!!!");
            return false;
        }
    });


});