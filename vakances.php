<?php
$page = "vakances";
require("header.php");
require("login.php");
?>
    <h1 id="vakancesH">
                <button class="btnB"><a href="index.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
                Iepazīsties ar pieejamām vakancēm un piesakies tām.</h1>
            <table class="vakancesT">
            <tr>
                <th>Logo</th>
                <th>Nosaukums</th>
                <th>Profesija</th>
                <th>Pilsēta</th>
                <th>Darba stundas</th>
                <th>Samaksa</th>
                <th>Apraksts</th>
                <th>Piesakies</th>
                <?php
                if(isset($_SESSION["Epasts"])){
                echo "<th>Rediģēt</th>
                        <th>Dzēst</th>";
                }    
                ?>
            </tr>
            <?php
                   require "connect_db.php";
                   $vakancesVaicajums = "SELECT * FROM vakance";
                   $atlasaVakanci = mysqli_query($savienojums, $vakancesVaicajums);
                   while($ieraksts = mysqli_fetch_assoc($atlasaVakanci)){
                    $bilde = $ieraksts['Logo'];
                    echo "
                     <tr>
                     <td>   
                     <img src='data:image/jpeg;base64,".base64_encode($bilde)."'/>
                    </td>
                    <td>{$ieraksts['Nosaukums']}</td>
                    <td>{$ieraksts['Profesija']}</td>
                    <td>{$ieraksts['Pilseta']}</td>
                    <td>{$ieraksts['Stundas']}</td>
                    <td>{$ieraksts['Samaksa']}</td>
                    <td class='apr'>{$ieraksts['Apraksts']}</td>
                    <td><button><i class='fa fa-sign-in'></i></button></td>
                    "; if(isset($_SESSION["Epasts"])){ 
                    echo "
                    <td><button><i class='fa fa-edit'></i></button></td>
                    <td><button><i class='fa fa-trash'></i></button></td>
                     ";} echo "</tr>;";
                    }
                ?>
        </table>
        </div>
        <?php require("footer.php"); ?>