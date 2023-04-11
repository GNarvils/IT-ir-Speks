<?php  
        require "header.php";
        session_start();
        if(isset($_SESSION["Epasts"])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require "connect_db.php";

            if(isset($_POST['pievienot'])){
                $logo_ievade = $_POST['logoP'];
                $nosaukumu_ievade = $_POST['nosaukumsP'];
                $profesija_ievade = $_POST['profesijaP'];
                $pilseta_ievade = $_POST['pilsetaP'];
                $stundas_ievade = $_POST['stundasP'];
                $samaksa_ievade = $_POST['samaksaP'];
                $apraksta_ievade = $_POST['aprakstsP'];
                $pievienoja = $_POST['pievienoja'];
                if($_POST['Statuss'] = 'Yes'){
                    $ID_Statuss = 1;
                }else{
                    $ID_Statuss = 2;
                }
                    if(!empty($logo_ievade) && !empty($nosaukumu_ievade) && !empty($profesija_ievade) && !empty($pilseta_ievade) && !empty($stundas_ievade) && !empty($samaksa_ievade) && !empty($apraksta_ievade)){
                        $pievienot_vakanci_SQL = "INSERT INTO vakance(Logo, Nosaukums, Profesija, Pilseta, Stundas, Samaksa, Apraksts, ID_Lietotaji, ID_Statuss) VALUES ('$logo_ievade', '$nosaukumu_ievade', '$profesija_ievade', '$pilseta_ievade', '$stundas_ievade', '$samaksa_ievade', '$apraksta_ievade', '$pievienoja', '$ID_Statuss')"; 

                        if(mysqli_query($savienojums, $pievienot_vakanci_SQL)){
                            echo "<br><div class='pieteiksanaskluda zals'>Pievienošana ir noritējusi veiksmīgi!</div>";
                            header("Refresh: 0; url=vakances.php");
                        }else{
                            echo "<br><div class='pieteiksanaskluda sarkans'>Pievienošana nav izdevusies! Mēģiniet vēlreiz!</div>";
                            header("Refresh: 5; url=pievienotv.php");
                        }
                    }else{
                        echo "<div class='pieteiksanaskluda sarkans'>Pievienošana nav izdevusies! Kāds no ievades laukiem aizpildīts NEKOREKTI!</div>";
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
    <section class="admin">
    <div class="row">
        <div class="info">
            <div class="head-info">Pievienot jaunu specialitāti</div>
            <table class="adminTabula">
            <form action="" method="POST">    
                <tr>
                <td>Logo: </td>
                <td><input type="text" placeholder="Ievadi logo URL*" name="logoP" class="ievietot" title="Bilde" required></td>
                </tr>
                <tr>
                <td>Nosaukums:</td>
                <td><input type="text" placeholder="Ievadi uzņēmuma nosaukumu*" name="nosaukumsP" class="ievietot" title="Nosaukums" maxlength="45"required></td>
                </tr>
                <tr>
                <td>Profesija:</td>
                <td><input type="text" placeholder="Ievadi profesiju*" name="profesijaP" class="ievietot" title="Profesija" maxlength="60"required></td>
                </tr>
                <tr>
                <td>Pilseta:</td>
                <td><input type="text" placeholder="Ievadi pilsētu*" name="pilsetaP" class="ievietot" title="Pilsēta" maxlength="50" required></td>
                </tr>
                <tr>
                <td>Stundas:</td>
                <td><input type="text" placeholder="Ievadi darba stundas*" name="stundasP" class="ievietot" title="Stundas" maxlength="40" required></td>
                </tr>
                <tr>
                <td>Samaksa:</td>
                <td><input type="text" placeholder="Ievadi darba samaksu*" name="samaksaP" class="ievietot" title="Samaksa" maxlength="12" required></td>
                </tr>
                <tr>
                <td>Apraksts:</td>
                <td> <textarea type="text" placeholder="Ievadi aprakstu*" name="aprakstsP" class="ievietot2" title="Vakances apraksts" required></textarea></td>
                </tr>
                <tr>
                <td>Pievienoja:</td>
                <?php
                echo "<td><input type='text'  name='pievienoja' value = '$ID_Lietotaji' readonly></td>"
                ?>
                </tr>
                <tr>
                <td>Statuss:</td>
                <td><p>Yes</p><input type="radio" name="Statuss" value="Yes">
                <p>No</p><input type="radio" name="Statuss" value="No">
                </td>
                </tr>
                <tr>
                <td colspan='2'><input type="submit" value="Pievienot"  name="pievienot" ></td>
                </tr>
            </form>
            </table>
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