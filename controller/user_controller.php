<?php
include '../commons/session.php';

 if(!isset($_GET["status"])){
    ?>
    <script>
        window.location="../view/login.php";
    </script>
    <?php
 }

 $status = $_GET["status"];

 include '../model/user_model.php';
 $userObj = new User();

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
 }