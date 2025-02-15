$(document).ready(function(){

    $("#user_role").change(function(){
        
        var role_id=$("#user_role").val();
        var url ="../controller/user_controller.php?status=load_functions";
        
        $.post(url,{role:role_id},function(data){
            $("#display_functions").html(data).show();
        });
        
    });
    
    
    $("form").submit(function(){
        
       
    });
    
});


