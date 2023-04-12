<?php
require("header.php");
require "connect_db.php";
if(isset($_POST['Mainit'])){
    $statuss = $_POST['Statuss'];
    $rediget_pieteikumu_SQL = "UPDATE pieteikties SET ID_Statuss = '$statuss' WHERE Pieteikties_ID = ".$_POST["Mainit"];
    if(mysqli_query($savienojums, $rediget_pieteikumu_SQL)){
         header("Refresh:0; url=pieteikumi.php");
   }else{
         echo "<div class='kluda'>Kļūda sistēmā!</div>";
         header("Refresh:2; url=pieteikumi.php");
  }
}
$AD_ID = $_POST["apskatit"];
$pieteikumuVaicajums = "SELECT * FROM pieteikties WHERE Pieteikties_ID = '$AD_ID'";
$atlasaPieteikumu = mysqli_query($savienojums, $pieteikumuVaicajums);

while($ieraksts = mysqli_fetch_assoc($atlasaPieteikumu)){
   echo "
   <section id='pieteikums'>
   <h1 id='vakancesH'>
    <button class='btnB'><a href='pieteikumi.php' class='back'><img src='images/Atpakal.png' alt=''></a></button>
    Atpakaļ pieteikumu lapā</h1>
    <p>Vārds: {$ieraksts['Vards']}</p>
    <p>Uzvārds: {$ieraksts['Uzvards']}</p> 
    <p>Talrunis: {$ieraksts['Talrunis']}</p> 
    <p>E-pasts: {$ieraksts['Epasts']}</p> 
    <p>Dzimšanas Dati: {$ieraksts['DzimDati']}</p> 
    <p>Izglītība: {$ieraksts['Izglitiba']}</p> 
    <p>Darba Pieredze: {$ieraksts['DarbPieredze']}</p> 
    <p>Digitālās Prasmes: {$ieraksts['DigPrasmes']}</p> 
    <p>Komentāri: {$ieraksts['Komentari']}</p>
    <p>Vakances numurs: {$ieraksts['ID_Vakances']}</p> 
    <p>Statuss:</p>
    <form method='POST'>
    <p>Saņemts</p><input type='radio' name='Statuss' value='6' class='status'>
    <p>Apskatīts</p><input type='radio' name='Statuss' value='5' class='status'> 
    <p>Atraidīts</p><input type='radio' name='Statuss' value='4' class='status'>
    <p>Pieņemts</p><input type='radio' name='Statuss' value='3' class='status'>
    <button class='buttonl' type='submit'value='{$ieraksts['Pieteikties_ID']}' name='Mainit'>Mainīt statusu</button>
    </form>
    </section>  ";

}?>

<?php 
//<p>Vakance: $nosaukums</p> 
    //$vakancesVaicajums = "SELECT * FROM vakance WHERE Vakances_ID = '{$ieraksts['ID_Vakances']}' limit 1";
    //$atlasaVakanci = mysqli_query($savienojums, $pieteikumuVaicajums);
    //while($row = mysqli_fetch_assoc($atlasaVakanci)){
      //  $nosaukums = $row["Nosaukums"];
    //}
require("footer.php");?>


