<?php

include '../commons/db_connection.php';

$dbcon = new DbConnection();

class User{

    public function getAllRoles(){

    $con=$GLOBALS["con"];
    $sql = "SELECT * FROM role";

    $result = $con->query($sql) or die($con->error);
    return $result;
    }


}