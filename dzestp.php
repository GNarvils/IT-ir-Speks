<?php 
require "connect_db.php";

    $dzestasID = $_POST['dzest'];
    
    if(!empty($dzestasID)){
        $izdzestSQL = "DELETE FROM pieteikties WHERE Pieteikties_ID = $dzestasID;";
        if(mysqli_query($savienojums, $izdzestSQL)){
            header("refresh: 0; url=pieteikumi.php");
        }else{
            header("refresh: 0; url=pieteikumi.php");
        }
    }else{
        header("refresh: 0; url=pieteikumi.php");
    }
    ?>