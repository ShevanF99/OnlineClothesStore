<?php
include_once '../commons/session.php';

 if(!isset($_GET["status"])){
    ?>
    <script>
        window.location="../view/login.php";
    </script>
    <?php
 }

 $status = $_GET["status"];

 include '../model/user_model.php';
 include '../model/login_model.php';
 $userObj = new User();
 $loginObj = new Login();

 switch($status)
 {
    case "load_functions":
         
        $role_id = $_POST["role"];
        
        $moduleResult=$userObj->getRoleModules($role_id);
        
        while ($module_row=$moduleResult->fetch_assoc())
        {
            $module_id = $module_row["module_id"];
            $functionResult = $userObj->getModuleFunctions($module_id);
            ?>
                <div class="col-md-4">
                    <h4>
                        <?php
                            echo $module_row["module_name"];
                            echo "</br>";
                        ?>
                    </h4>
                        <?php
                            while($fun_row=$functionResult->fetch_assoc()){
                                ?>
                    <input type="checkbox" name="fun[]" value="<?php echo $fun_row["function_id"];?>" checked/>
                                <?php echo $fun_row["function_name"];?>
                                <br/>
                                <?php
                            }
                        ?>
                </div>
            <?php
        }
        
    break;
    case "add_user":
        
        $fname  =$_POST["fname"];
        $lname =$_POST["lname"];
    $email =$_POST["email"];
$dob =$_POST["dob"];
$nic =$_POST["nic"];
$cno1  =$_POST["cno1"];
$cno2  =$_POST["cno2"];
$user_role  =$_POST["user_role"];

$user_image=$_FILES["user_image"];

try{
    if($fname=="")
    {
        
        throw new Exception("First Name cannot be Empty!!!!");
    }
 
    ///  uploading image
    $file_name="";
    if (isset($_FILES["user_image"])){
        if($user_image["name"]!= ""){
 
    $file_name= time()."_".$user_image["name"];
    $path="../images/user_images/$file_name";
    move_uploaded_file($user_image["tmp_name"], $path);
        }
    }
  $user_id=  $userObj->addUser($fname, $lname, $email, $dob, $nic, $user_role, $file_name);

  // creating a login account
    if ($user_id>0){
        $loginObj->addUserLogin($user_id,$email,$nic);
    }

    
}
catch(Exception $ex)
{
    $msg= $ex->getMessage();
    $msg= base64_encode($msg);
    ?>
      <script>
        window.location="../view/add-user.php?msg=<?php echo $msg; ?>";
    </script>
    <?php
    
}
        
        
    break;
 }