<?php 
require "connect_db.php";

    $dzestasID = $_POST['dzestv'];
    
    if(!empty($dzestasID)){
        $izdzestSQL = "DELETE FROM vakance WHERE Vakances_ID = $dzestasID;";
        if(mysqli_query($savienojums, $izdzestSQL)){
            header("refresh: 0; url=vakances.php");
        }else{
            header("refresh: 0; url=vakances.php");
        }
    }else{
        header("refresh: 0; url=vakances.php");
    }
    ?>