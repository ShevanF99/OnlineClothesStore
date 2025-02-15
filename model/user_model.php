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
    
    public function getRoleModules($roleId){
        
        $con=$GLOBALS["con"];
        $sql = "SELECT * FROM role_module r, module m WHERE r.module_id = m.module_id AND r.role_id='$roleId'";
        $result = $con->query($sql) or die($con->error);
        return $result;
        
    }
    
    public function getModuleFunctions($moduleId){
        
        $con=$GLOBALS["con"];
        $sql = "SELECT * FROM function WHERE module_id='$moduleId'";
        $result = $con->query($sql) or die($con->error);
        return $result;
        
    }


}