<?php 
    if(isset($_POST)){
        $rawData = file_get_contents("php://input");
        echo $_SESSION['id'] = json_decode($rawData, true);
    }
?>