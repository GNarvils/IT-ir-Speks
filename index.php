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
            <a href="#sakums">Sākumlapa</a>
            <a href="#vakances">Vakances</a>
            <a href="#aktualitates">Aktualitātes</a>
        </nav>
        <div class="autorizeties">
          <a href="#">Autorizēties</a>
            <img src="images/autorizeties.png" alt="">
        </div>
    </header>
    <section id="autorizeties">
    <form action='#' method='post'>
        <h2>Autorizējies</h2>
        <input type="email" placeholder="E-pasts" name="E-pasts" title="E-pasts" required>
        <br>
        <input type="password" placeholder="Parole" name="Parole" title="Parole" required>
        <br>
        <input type="submit" value="Autorizējies" name="Autorizējies" title="Autorizējies" class="Abtn">
        <br>
        <a href="#"> Aizmirsi paroli!</a>
    </form>
    </section>
    <section id="sakums">
        <div class="content">
            <h2>Sāc savu IT stāstu!</h2>
            <p>Sāc savu jauno IT karjēru vai iepazīsties ar jaunām IT aktualitātēm šajā vietnē!</p>
        </div>
        <div class="image">
            <img src="images/sakums.png" alt="">
        </div>
    </section>
    <section id="vakances">
        <div class="image">
            <img src="images/vakances.png" alt="">
        </div>
        <div class="content">
            <h2>Sāc savu IT karjēru!</h2>
            <p>Ja meklējat jaunu darbu, mēs iesakam iepazīties ar kādām no pieejamām vakancēm un sākt jūsu IT karjēru!</p>
            <a href="vakances.html"><button class="poga">Piesakies vakancei!</button></a>
        </div>
    </section>
    <section id="aktualitates">
        <div class="content">
            <h2>Iepazinies ar šo jomu!</h2>
            <p>Ja gribat būt informēt uz jaunākām IT aktualitātēm, jūs varat jau to sākt tagad, lasot šeit!</p>
            <a href="aktualitates.html"><button class="poga">Apskatiet aktualitātes!</button></a>
        </div>
        <div class="image">
            <img src="images/aktualitates.png">
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
                <li><i class="fa fa-map-marker"></i> Ventspils iela 51, Liepāja, Latvija</li>
            </ul>
            </div>
    </footer>
</body>
</html>