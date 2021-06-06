<?php
     header("Content-Type:text/html; charset=utf-8");
     $serverName="DESKTOP-4O0KNQV\SQLEXPRESS";
     $connectionInfo=array("Database"=>"messageboard","UID"=>"CCU","PWD"=>"j1010065","CharacterSet" => "UTF-8");
     $conn=sqlsrv_connect($serverName,$connectionInfo);
         if($conn){
             echo "<br />";
         }else{
             echo "Error!!!<br />";
             die(print_r(sqlsrv_errors(),true));
         }            
?>