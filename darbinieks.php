<?php
require("header.php");
require "connect_db.php";
if(isset($_POST['Mainit'])){
    $statuss = $_POST['Statuss'];
    $rediget_pieteikumu_SQL = "UPDATE lietotaji SET Statuss = '$statuss' WHERE Lietotaji_ID = ".$_POST["Mainit"];
    if(mysqli_query($savienojums, $rediget_pieteikumu_SQL)){
         header("Refresh:0; url=darbinieki.php");
   }else{
         echo "<div class='kluda'>Kļūda sistēmā!</div>";
         header("Refresh:5; url=darbinieki.php");
  }
}
$LI_ID = $_POST["rediget"];
$lietotajuVaicajums = "SELECT * FROM lietotaji WHERE Lietotaji_ID = '$LI_ID'";
$atlasaLietotaju = mysqli_query($savienojums, $lietotajuVaicajums);

while($ieraksts = mysqli_fetch_assoc($atlasaLietotaju)){
   echo "
   <section id='pieteikums'>
   <h1 id='vakancesH'>
    <button class='btnB'><a href='darbinieki.php' class='back'><img src='images/Atpakal.png' alt=''></a></button>
    Atpakaļ darbinieku lapā</h1>
    <p>Lietotājvārds: {$ieraksts['Lietotajvards']}</p>
    <p>E-pasts: {$ieraksts['Epasts']}</p> 
    <p>Paroles šifrējums: {$ieraksts['Parole']}</p> 
    <p>Talrunis: {$ieraksts['Talrunis']}</p> 
    <p>Administrators: "; if($ieraksts['Administrators'] == 1){
        echo "<td>Ir</td>";
      }else{
          echo "<td>Nav</td>";
      }
      echo "</p> 
    <p>Paroles maiņu: {$ieraksts['ParoleM']}</p> 
    <p>Statuss:</p>
    <form method='POST'>
    <p>Aktīvs</p><input type='radio' name='Statuss' value='Aktīvs' class='status' checked='checked'>
    <p>Neaktīvs</p><input type='radio' name='Statuss' value='Neaktīvs' class='status'> 
    <button class='buttonl' type='submit'value='{$ieraksts['Lietotaji_ID']}' name='Mainit'>Mainīt statusu</button>
    </form>
    </section>  ";

}?>

<?php 
require("footer.php");?>