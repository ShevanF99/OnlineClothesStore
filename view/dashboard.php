<?php

include_once '../commons/session.php';

//get user information from session
$userrow=$_SESSION["user"];

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
                    </br>
                    <a href="" class="btn btn-primary">Logout</a>
                </div>
            </div>
            </br>     
        </div>
    </body>
    <script src="../js/jquery-3.7.1.js"></script>
    <!-- <script src="../js/loginValidation.js"></script> -->
</html>