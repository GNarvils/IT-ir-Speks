<?php
require("header.php");
require("login.php");
require "connect_db.php";
$AK_ID = $_POST["Lasit"];
$aktualitatesVaicajums = "SELECT * FROM aktualitates WHERE Aktualitates_ID = $AK_ID";
$atlasaAktualitati = mysqli_query($savienojums, $aktualitatesVaicajums);
while($ieraksts = mysqli_fetch_assoc($atlasaAktualitati)){
 echo "
 <section id='aktualitate'>
 <h1 id='aktualitatesH'>
            <button class='btnB'><a href='aktualitates.php' class='back'><img src='images/Atpakal.png' alt=''></a></button>
            {$ieraksts['Virsraksts']}</h1>
            <h2 id='apraksts'>{$ieraksts['Apraksts']}</h2>
            <div class='headimg'>
            <img id='raksts'src='{$ieraksts['Bilde']}'/>
            </div>
  <p>{$ieraksts['Raksts']}</p>
  </section>";
}
require("footer.php");?>