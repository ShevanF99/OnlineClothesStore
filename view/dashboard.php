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
        <?php include_once "../includes/bootstrap_css_includes.php"?>
    </head>
    <body>
        <div class="container">
            <?php $pageName="DASHBOARD" ?>
            <?php include_once "../includes/header_row_includes.php";?>
            
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
</html>