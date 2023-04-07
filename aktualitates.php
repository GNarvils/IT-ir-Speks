<?php
$page = "aktualitates";
require("header.php");
require("login.php");
?>
    <section id="aktualitate">
        <h1 id="aktualitatesH">
            <button class="btnB"><a href="index.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
            Apskati jaunākos IT notikumus.</h1>
            <div class="container">
        <div class="box-container">
        <?php
                   require "connect_db.php";
                   $aktualitatesVaicajums = "SELECT * FROM aktualitates";
                   $atlasaAktualitati = mysqli_query($savienojums, $aktualitatesVaicajums);
                   while($ieraksts = mysqli_fetch_assoc($atlasaAktualitati)){
                    $bilde = $ieraksts['Bilde'];
                    echo "
                    <div class='box'>
                    <img src='data:image/jpeg;base64,".base64_encode($bilde)."'/>
                     <h2>{$ieraksts['Virsraksts']}</h2>
                     <p class='apr'>{$ieraksts['Apraksts']}</p>
                     <button>Lasi vairāk</button>
                     ";
                     if(isset($_SESSION["Epasts"])){
                        echo "
                    <button class='mazs'><i class='fa fa-edit'></i></button>
                    <button class='mazs'><i class='fa fa-trash'></i></button>
                    ";
                     }
                    echo "</div> ";
                   }
                ?>
                </div>
                </div>
    </section>
    <?php require("footer.php"); ?>