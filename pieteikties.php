<?php
require("header.php");
require("login.php");
require "connect_db.php";
if(isset($_POST["Piesakies"])){
    $vards = $_POST["vards"];
    $uzvards = $_POST["uzvards"];
    $talrunis = $_POST["talrunis"];
    $epasts = $_POST["Epasts"];
    $dzimdati = $_POST["Dzimdati"];
    $izglitiba = $_POST["izglitiba"];
    $pieredze = $_POST["DarbP"];
    $prasmes = $_POST["DigPra"];
    $komentari = $_POST["koment"];
    $statuss = "6";
    $VakID = $_POST["vak"];
    if(!empty($vards) && !empty($uzvards) && !empty($talrunis) && !empty($epasts) && !empty($dzimdati) && !empty($izglitiba) && !empty($pieredze) && !empty($prasmes) && !empty($komentari)){
        $pievienot_pieteikumu_SQL = "INSERT INTO pieteikties VALUES(Vards, Uzvards, Epasts, Talrunis, DzimDati, Izglitiba, DarbaPieredze, DigPrasmes, Komentari, ID_Vakances, ID_Statuss) VALUES ('$vards', '$uzvards', '$talrunis', '$epasts', '$dzimdati', '$izglitiba', '$pieredze', '$prasmes', '$komentari', '$VakID', '$statuss')";

        if(mysqli_query($savienojums, $pievienot_pieteikumu_SQL)){
            header("Refresh: 0; url=vakances.php");
        }else{
            echo "<br><div class='kluda'>Pieteikšanās nav izdevusies! Mēģiniet vēlreiz!</div>";
            header("Refresh: 10; url=vakances.php");
        }
    }else{
        echo "<div class='kluda'>Pieteikšanās nav izdevusies! Kāds no ievades laukiem aizpildīts NEKOREKTI!</div>";
    }
}else{
$ID = $_POST['apskatit'];
$idVaicajums = "SELECT * FROM vakance WHERE Vakances_ID = '$ID' limit 1";
$atlasaID = mysqli_query($savienojums, $idVaicajums);
while($row = mysqli_fetch_assoc($atlasaID)){
    $nosaukums = $row["Nosaukums"];
    $profesija = $row["Profesija"];
}
}
?>
    <section id="pieteikties">
        <h1 id="pieteiktiesH">
            <button class="btnB"><a href="vakances.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
         Sāc strādāt <span> <?php echo $nosaukums ?> par <?php echo $profesija ?></span>!</h1>
        <div class="box-container">
        <div class="box">
            <form action="" method="POST">
                <input type="text" placeholder="Vārds" name="vards" class="vu" title="Vārds" required>
                <input type="text" placeholder="Uzvārds" name="uzvards" class="vu" title="Uzvārds" required>
                <br>
                <input type="number" placeholder="Talrunis" name="talrunis" class="vu" title="Talrunis" required>
                <input type="email" placeholder="E-pasts" name="Epasts" class="vu" title="E-pasts" required>
                <br>
                <input type="date" placeholder="Dzimšanas dati" name="Dzimdati" class="liel" title="Dzimšanas dati" required>
                <br>
                <input type="text" placeholder="Izglītība" name="izglitiba" class="liel" title="Izglitiba" required>
                <br>
                <input type="text" placeholder="Darba pieredze" name="DarbP" class="liel" title="Darba pieredze" required>
                <br>
                <input type="text" placeholder="Digitālās prasmes" name="DigPra" class="liel" title="Digitālās prasmes" required>
                <br>
                <textarea maxlength="408" name="koment" placeholder="Komentāri."></textarea>
                <br>
                <input type="text"  name='vak' <?php echo "value = $ID";?> readonly>
                <br>
                <input type="submit" name="Piesakies" value = "Piesakies" title="Piesakies" class="buttonl">
            </form>
        </div>
    </div>
    </section>
    <?php require("footer.php"); ?>