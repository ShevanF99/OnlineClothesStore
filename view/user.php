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
            <?php $pageName="USER MANAGEMENT" ?>
            <?php include_once "../includes/header_row_includes.php";?>
            
            <div class="col-md-3">

            </div>
            <div class="col-md-9">

            </div>
        </div>
    </body>
    <script src="../js/jquery-3.7.1.js"></script>
</html>