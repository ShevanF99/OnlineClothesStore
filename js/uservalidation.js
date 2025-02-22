$(document).ready(function(){

    $("#user_role").change(function(){
        
        var role_id=$("#user_role").val();
        var url ="../controller/user_controller.php?status=load_functions";
        
        $.post(url,{role:role_id},function(data){
            $("#display_functions").html(data).show();
        });
        
    });
    
    
    $("form").submit(function(){
        
        var  fname = $("#fname").val();
        var  lname= $("#lname").val();
        var email = $("#email").val();
        var dob = $("#dob").val();
        var nic = $("#nic").val();
        var cno1 = $("#cno1").val();
        var cno2 = $("#cno2").val();
        var user_role = $("#user_role").val();
        
        if(fname=="")
        {
            $("#msg").html("First Name Cannot Be Empty!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }
        if(lname=="")
        {
            $("#msg").html("Last Name Cannot Be Empty!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }
        if(email=="")
        {
            $("#msg").html("Email Cannot Be Empty!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }
        if(dob=="")
        {
            $("#msg").html("DOB Cannot Be Empty!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }
        if(nic=="")
        {
            $("#msg").html("First Name Cannot Be Empty!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }if(cno1=="")
        {
            $("#msg").html("Contact Number 1 Cannot Be Empty!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }
        if(cno2=="")
        {
            $("#msg").html("Contact Number 2 Cannot Be Empty!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }
        if(user_role=="")
        {
            $("#msg").html("User Role Cannot Be Empty!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }
        
        var patNic  = /^[0-9]{9}[vVxX]$/;
        var patmobile =/^\+947[0-9]{8}$/;
        
        if(!nic.match(patNic))
        {
            $("#msg").html("NIC is invalid!!!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }
        if(!cno2.match(patmobile))
        {   
            $("#msg").html("Mobile Number is invalid!!!");
            $("#msg").addClass("alert alert-danger");
            return false;
            
        }
        
      
    });
    
});


