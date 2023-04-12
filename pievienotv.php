<?php  
        require "header.php";
        session_start();
        if(isset($_SESSION["Epasts"])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require "connect_db.php";
            ?><h1 id="vakancesH">
            <button class="btnB"><a href="vakances.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
            Pievieno jaunu vakanci.</h1>
            <?php
            if(isset($_POST['pievienot'])){
                $logo_ievade = $_POST['logoP'];
                $nosaukumu_ievade = $_POST['nosaukumsP'];
                $profesija_ievade = $_POST['profesijaP'];
                $pilseta_ievade = $_POST['pilsetaP'];
                $stundas_ievade = $_POST['stundasP'];
                $samaksa_ievade = $_POST['samaksaP'];
                $apraksta_ievade = $_POST['aprakstsP'];
                $pievienoja = $_POST['pievienoja'];
                    if(!empty($logo_ievade) && !empty($nosaukumu_ievade) && !empty($profesija_ievade) && !empty($pilseta_ievade) && !empty($stundas_ievade) && !empty($samaksa_ievade) && !empty($apraksta_ievade)){
                        $pievienot_vakanci_SQL = "INSERT INTO vakance(Logo, Nosaukums, Profesija, Pilseta, Stundas, Samaksa, Apraksts, ID_Lietotaji, ID_Statuss) VALUES ('$logo_ievade', '$nosaukumu_ievade', '$profesija_ievade', '$pilseta_ievade', '$stundas_ievade', '$samaksa_ievade', '$apraksta_ievade', '$pievienoja', '1')"; 

                        if(mysqli_query($savienojums, $pievienot_vakanci_SQL)){
                            header("Refresh: 0; url=vakances.php");
                        }else{
                            echo "<br><div class='kluda'>Pievienošana nav izdevusies! Mēģiniet vēlreiz!</div>";
                            header("Refresh: 5; url=vakances.php");
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
                <input type="text" placeholder="Ievadi logo URL*" name="logoP" class="ievietot" title="Bilde" required>
                <br>
                <input type="text" placeholder="Ievadi uzņēmuma nosaukumu*" name="nosaukumsP" class="ievietot" title="Nosaukums" maxlength="45"required>
                <br>
                <input type="text" placeholder="Ievadi profesiju*" name="profesijaP" class="ievietot" title="Profesija" maxlength="60"required>
                <br>
                <input type="text" placeholder="Ievadi pilsētu*" name="pilsetaP" class="ievietot" title="Pilsēta" maxlength="50" required>
                <br>
                <input type="text" placeholder="Ievadi darba stundas*" name="stundasP" class="ievietot" title="Stundas" maxlength="40" required>
                <br>
                <td><input type="text" placeholder="Ievadi darba samaksu*" name="samaksaP" class="ievietot" title="Samaksa" maxlength="12" required>
                <br>
                <textarea type="text" placeholder="Ievadi aprakstu*" name="aprakstsP" class="ievietot2" title="Vakances apraksts" required></textarea>
                <br>
                <?php
                echo "<input type='text' class='inv' name='pievienoja' value = '$ID_Lietotaji' readonly>";
                ?>
                <input type="submit" value="Pievienot"  name="pievienot" class="buttonl">
            </form>
    </div>
    </div>
    </section>
    <?php
}else{
            echo "<div class='pieteiksanaskluda sarkans'>
            <br>
            Notikusi kļūda!
            Lūdzu ielagojieties jūsu kontā!
          </div>";
          header("Refresh: 2; url=vakances.php");
}?>
<?php include "footer.php" ?>        