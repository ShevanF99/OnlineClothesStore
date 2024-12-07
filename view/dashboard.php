<?php

include_once '../commons/session.php';
include_once '../model/module_model.php';

//get user information from session
$userrow=$_SESSION["user"];

$moduleObj = new Module();

$moduleResult = $moduleObj->getAllModules();


?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row" style="height:50px">

            </div>
            <div class="row" style="height:60px">
                <div class="col-md-3">
                    <img src="../images/logo.png" width="80px" heigth="60px"/>
                </div>
                <div class="col-md-6">
                    <h1 align="center">Online Colthestore</h1>
                </div>
                <div class="col-md-1 col-md-offset-2">
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-3">
                    <?php
                        echo ucwords($userrow["user_fname"]." ".$userrow["user_lname"]);
                    ?>
                </div>
                <div class="col-md-6">
                    <h4 align="center">Online Colthestore</h4>
                </div>
                <div class="col-md-1 col-md-offset-2">
                    <a href="" class="btn btn-primary">Logout</a>
                </div>
            </div>
            <hr/>
            <?php
                while ($module_row=$moduleResult->fetch_assoc())
                {
            ?> 
                <div class="col-md-4">
                    <a href="<?php echo $module_row["module_url"]?>" style="text-decoration:none;color:#fff">
                        <div class="panel" style="height: 170px;background-color:#45a88f">
                            <h1 align="center">
                                <img src="../images/icons/<?php echo $module_row["module_icon"] ?>" height="100px" width="80px"/>
                            </h1>
                            <h4 align="center">
                                <?php echo $module_row["module_name"];?>
                            </h4>
                        </div>
                    </a>
                </div>
            <?php
                }
            ?>    
        </div>
    </body>
    <script src="../js/jquery-3.7.1.js"></script>
    <!-- <script src="../js/loginValidation.js"></script> -->
</html>