<?php  
        require "header.php";
        session_start();
        if(isset($_SESSION["Epasts"])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require "connect_db.php";
            ?>
                <h1 id="aktualitatesH">
                    <button class="btnB"><a href="aktualitates.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
                    Pievieno jaunu aktualitāti.</h1>
                    <?php
            if(isset($_POST['pievienot'])){
                $bilde_ievade = $_POST['bildeP'];
                $virsrakstu_ievade = $_POST['virsrakstsP'];
                $apraksts_ievade = $_POST['aprakstsP'];
                $raksta_ievade = $_POST['rakstsP'];
                $pievienoja = $_POST['pievienoja'];
                    if(!empty($bilde_ievade) && !empty($virsrakstu_ievade) && !empty($apraksts_ievade) && !empty($raksta_ievade)){
                        $pievienot_aktualitati_SQL = "INSERT INTO aktualitates(Bilde, Virsraksts, Apraksts, Raksts, ID_Lietotaji) VALUES ('$bilde_ievade', '$virsrakstu_ievade', '$apraksts_ievade', '$raksta_ievade', '$pievienoja')"; 

                        if(mysqli_query($savienojums, $pievienot_aktualitati_SQL)){
                            header("Refresh: 0; url=aktualitates.php");
                        }else{
                            echo "<br><div class='kluda'>Pievienošana nav izdevusies! Mēģiniet vēlreiz!</div>";
                            header("Refresh: 5; url=aktualitates.php");
                        }
                    }else{
                        echo "<div class='kluda'>Pievienošana nav izdevusies! Kāds no ievades laukiem aizpildīts NEKOREKTI!</div>";
                    }
            }else{
                $Epasts = $_SESSION["Epasts"];
                $idVaicajums = "SELECT * FROM lietotaji WHERE Epasts = '$Epasts' limit 1";
                $atlasaID = mysqli_query($savienojums, $idVaicajums);
                while($row = mysqli_fetch_assoc($atlasaID)){
                    $ID_Lietotaji = $row["Lietotaji_ID"];
                }
            }
        }
    ?>
     <section id="pieteikties">
        <div class="box-container">
        <div class="box">
            <form action="" method="POST">    
                <input type="text" placeholder="Ievadi bildes URL*" name="bildeP" class="ievietot" title="Bilde" required>
                <br>
                <td><input type="text" placeholder="Ievadi aktualitātes virsrakstu*" name="virsrakstsP" class="ievietot" title="Virsraksts" maxlength="50"required>
                <br>
                <input type="text" placeholder="Ievadi aktualitates aprakstu*" name="aprakstsP" class="ievietot" title="Apraksts" required>
                <br>
                <textarea type="text" placeholder="Ievadi aktualitātes rakstu*" name="rakstsP" class="ievietot2" title="Raksts" required></textarea>
                <br>
                <?php
                echo "<input type='text' class='inv'  name='pievienoja' value = '$ID_Lietotaji' readonly>";
                ?>
                    <input type="submit" value="Pievienot"  name="pievienot" class="buttonl">
            </form>
        </div>
    </div>
</section>
    <?php
}else{
            echo "<div class='kluda'>
            <br>
            Notikusi kļūda!
            Lūdzu ielagojieties jūsu kontā!
          </div>";
          header("Refresh: 2; url=aktualitates.php");
}?>
<?php include "footer.php" ?>        