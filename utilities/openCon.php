<?php 
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpass = "";
    $dbname = "enrollmentSystem";

    $con = mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

    $con === false? die():"";
?>