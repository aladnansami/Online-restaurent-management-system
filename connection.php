<?php
    function connect(){
        $dbHost= "localhost";
        $user= "root";
        $pass= "";
        $dbname="food";

        $conn= new mysqli($dbHost, $user, $pass, $dbname);
        //echo "connected";

        return $conn;
    }


?>
