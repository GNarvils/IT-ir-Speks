<?php
require("header.php");
require("login.php");
?>
    <section id="aktualitate">
        <h1 id="aktualitatesH">
            <button class="btnB"><a href="index.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
            Apskati jaunākos IT notikumus.</h1>
            <?php
            if(isset($_SESSION["Epasts"])){
            echo "<button class='pievienot'>Pievienot aktualitāti</button>";
            }
            ?>
            <div class="container">
        <div class="box-container">
        <?php
                   require "connect_db.php";
                   $aktualitatesVaicajums = "SELECT * FROM aktualitates";
                   $atlasaAktualitati = mysqli_query($savienojums, $aktualitatesVaicajums);
                   while($ieraksts = mysqli_fetch_assoc($atlasaAktualitati)){
                    echo "
                    <div class='box'>
                     <img src='{$ieraksts['Bilde']}'/>
                     <h2>{$ieraksts['Virsraksts']}</h2>
                     <p class='apr'>{$ieraksts['Apraksts']}</p>";
                     if(!isset($_SESSION["Epasts"])){
                     echo "<button>Lasi vairāk</button>";
                     }
                     if(isset($_SESSION["Epasts"])){
                        echo " <div class='akt'>
                    <form action='edita.php' method='post'>
                    <button class='mazs' type='submit' name='edita' value={$ieraksts['Aktualitates_ID']}><i class='fa fa-edit'></i></button>
                    </form>
                    <form action='deletea.php' method='post'>
                    <button type='submit' name='dzesta' class='mazs' value={$ieraksts['Aktualitates_ID']}><i class='fa fa-trash'></i></button>
                    </form></div>
                    ";
                     }
                    echo "</div> ";
                   }
                ?>
                </div>
                </div>
    </section>
    <?php require("footer.php");
    // Bilde ar blob $bilde = $ieraksts['Bilde']; <img src='data:image/jpeg;base64,".base64_encode($bilde)."'/>
    ?>