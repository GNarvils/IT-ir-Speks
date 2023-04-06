<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT ir Spēks</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://www.freeiconspng.com/thumbs/muscle-icon/muscular-gymnast-arm-muscles-show-8.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="containter">
    <header>
        <div class="logo">
            <img src="Images/logo.png" class="logo">
            <a href="#" class="logo">IT ir Spēks</a>
        </div>
        <nav class="navbar">
            <a href="index.html">Sākumlapa</a>
            <a href="vakances.html">Vakances</a>
            <a href="aktualitates.html">Aktualitātes</a>
        </nav>
        <div class="autorizeties">
            <a href="#">Autorizēties</a>
            <img src="images/autorizeties.png" alt="">
        </div>
    </header>
        <div>
            <h1 id="vakancesH">
                <button class="btnB"><a href="index.html" class="back"><img src="images/Atpakaļ.png" alt=""></a></button>
                Iepazīsties ar pieejamām vakancēm un piesakies tām</h1>
            <table class="vakancesT">
            <tr>
                <th>Logo</th>
                <th>Nosaukums</th>
                <th>Profesija</th>
                <th>Pilsēta</th>
                <th>Darba stundas</th>
                <th>Samaksa</th>
                <th>Apraksts</th>
                <th>Piesakies</th>
            </tr>
            <?php
                   require "connect_db.php";
                   $vakancesVaicajums = "SELECT * FROM vakance";
                   $atlasaVakanci = mysqli_query($savienojums, $vakancesVaicajums);
                   while($ieraksts = mysqli_fetch_assoc($atlasaVakanci)){
                    $bilde = $ieraksts['Logo'];
                    echo "
                     <tr>
                     <td>   
                     "?><img src="data:image/jpeg;base64,<?php echo base64_encode($bilde); ?>" /><?php "
                    </td>
                    <td>$ieraksts['Nosaukums']</td>
                    <td>$ieraksts['Profesija']</td>
                    <td>$ieraksts['Pilseta']</td>
                    <td>$ieraksts['Stundas']</td>
                    <td>$ieraksts['Samaksa']</td>
                    <td>$ieraksts['Apraksts']</td>
                    <td><button class><i class='fa fa-sign-in'></i></button></td>
                </tr>
                    
             ";
                   }
                ?>
                <td><img src="images/Microsoft.png"></td>
            <tr>
                <td><img src="images/Google.png"></td>
                <td>SIA "Google LLC"</td>
                <td>Programmētājs</td>
                <td>Rīga</td>
                <td>8 stundas</td>
                <td>15.00 Eur/h</td>
                <td>Cilvēks, kurš māk programmēt un veidot mākslīgo intalektu.</td>
                <td><button class><i class="fa fa-sign-in"></i></button></td>
            </tr>
        </table>
        </div>
    <footer>
        <div>
            <p id="copy">IT ir Spēks &copy 2023</p>
        </div>
        <div>
            <h2 id="kontakti">Kontakti</h2>
            <ul class="kontakts">
                <li><i class="fa fa-phone"></i> +371 23053943</li>
                <li><i class="fa fa-envelope"></i> itirspeks@gmail.com</li>
                <li><i class="fa fa-map-marker"></i>Ventspils iela 51, Liepāja, Latvija</li>
            </ul>
            </div>
    </footer>
</body>
</html>