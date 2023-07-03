<?php 
    // sanitizeInput and anti xml,sql injection 
    function sanitizeInput($con,$foo){
        $foo = mysqli_real_escape_string($con, htmlspecialchars(stripslashes(trim($foo))));
        return $foo;
    }
    // CRUD
    function create($con, $strSql){
        $isSuccessful = false;
        if(mysqli_query($con, $strSql)){
            $isSuccessful = true;
        }
        return $isSuccessful;
    }
    
    function read($con, $strSql){
        $record = [];
        if($rs = mysqli_query($con, $strSql)){
            if(mysqli_num_rows($rs) == 1){
                $record = mysqli_fetch_array($rs, MYSQLI_ASSOC);
            }
            elseif (mysqli_num_rows($rs) > 1) {
                $record = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            }
            mysqli_free_result($rs);

        }
        else{
            $record = "Could not perform read query";
        }
        return $record;
    }

    function delete($con, $strSql){
        $isSuccessful = false;
        if(mysqli_query($con, $strSql)){
            $isSuccessful = true;
        }
        return $isSuccessful;
    }

    function update($con, $strSql){
        $isSuccessful = false;
        if(mysqli_query($con, $strSql)){
            $isSuccessful = true;
        }
        return $isSuccessful;
    }


?>