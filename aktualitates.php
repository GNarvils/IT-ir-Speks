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
            <a href="index.php">Sākumlapa</a>
            <a href="vakances.php">Vakances</a>
            <a href="aktualitates.php">Aktualitātes</a>
        </nav>
        <div class="autorizeties">
            <a href="#">Autorizēties</a>
            <img src="images/autorizeties.png" alt="">
        </div>
    </header>
    <section id="aktualitate">
        <h1 id="aktualitatesH">
            <button class="btnB"><a href="index.php" class="back"><img src="images/Atpakaļ.png" alt=""></a></button>
            Apskati jaunākos IT notikumus.</h1>
        <div class="box-container">
        <?php
                   require "connect_db.php";
                   $aktualitatesVaicajums = "SELECT * FROM aktualitates";
                   $atlasaAktualitati = mysqli_query($savienojums, $aktualitatesVaicajums);
                   while($ieraksts = mysqli_fetch_assoc($atlasaAktualitati)){
                    $bilde = $ieraksts['Bilde'];
                    echo "
                    <div class='box'>
                    "?><img src="data:image/jpeg;base64,<?php echo base64_encode($bilde); ?>" /><?php "
                            <h2>{$ieraksts['Virsraksts']}</h2>
                            <p>{$ieraksts['Apraksts']}</p>
                            <button>Lasi vairāk</button>
                    
                    </div>        ";
                   }
                ?>
        <div class="box">
            <img src="images/MicrosoftW12.jpg">
            <h2>Jauna operētājsistēma!</h2>
            <p>Kompānijai Microsoft drīz iznāks jaunā Windows operētājsistēmas versija.</p>
            <button>Lasi vairāk</button>
        </div>
        <div class="box">
            <img src="images/GoogleAi.jpg">
            <h2>Jauna Google meklēšanas veids!</h2>
            <p>Meklētājam Google drīz būs jauna versija, kur izmantos mākslīgo intelektu, lai varētu lietotājiem palīdzēt labāk meklēt.</p>
            <button>Lasi vairāk</button>
        </div>
    </div>
    </section>
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