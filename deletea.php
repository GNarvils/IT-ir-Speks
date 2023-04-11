<?php 
require "connect_db.php";

    $dzestasID = $_POST['dzesta'];
    
    if(!empty($dzestasID)){
        $izdzestSQL = "DELETE FROM aktualitates WHERE Aktualitates_ID = $dzestasID;";
        if(mysqli_query($savienojums, $izdzestSQL)){
            header("refresh: 0; url=aktualitates.php");
        }else{
            header("refresh: 0; url=aktualitates.php");
        }
    }else{
        header("refresh: 0; url=aktualitates.php");
    }
    ?>