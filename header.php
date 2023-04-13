<?php
session_start();
?>
		
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT ir Spēks</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://www.freeiconspng.com/thumbs/muscle-icon/muscular-gymnast-arm-muscles-show-8.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="containter">
    <header>
        <div class="logo">
            <img src="Images/logo.png" class="logo">
            <a href="#" class="logo">IT ir Spēks</a>
        </div>
        <nav class="navbar">
          <a href='index.php'>Sākumlapa</a>
            <a href='vakances.php'>Vakances</a>
            <a href='aktualitates.php'>Aktualitātes</a>
        </nav>
        <div class="auto">
           <?php if(isset($_SESSION["Epasts"])){
            echo "<a href='logout.php'>Neautorizēties</a>
            <img src='images/autorizeties.png' alt=''>";
           }else{
            echo "<a href='#'>Autorizēties</a>
            <img src='images/autorizeties.png' alt=''>";
           }
            ?>
        </div>
    </header>