<?php
require("header.php");
require("login.php");
?>
    <h1 id="vakancesH">
                <button class="btnB"><a href="index.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
                Iepazīsties ar pieejamām vakancēm un piesakies tām.</h1>
               <?php if(isset($_SESSION["Epasts"])){
            echo "<form action = 'pievienotv.php' method='post'><button class='pievienot'>Pievienot vakanci</button></form>";
            } ?>
            <table class="vakancesT">
            <tr>
                <th>Logo</th>
                <th>Nosaukums</th>
                <th>Profesija</th>
                <th>Pilsēta</th>
                <th>Darba stundas</th>
                <th>Samaksa</th>
                <th>Apraksts</th>
                <?php
                if(!isset($_SESSION["Epasts"])){
                echo "<th>Piesakies</th>";
                }
                ?>
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
                     <img src='{$ieraksts['Logo']}'>
                    </td>
                    <td>{$ieraksts['Nosaukums']}</td>
                    <td>{$ieraksts['Profesija']}</td>
                    <td>{$ieraksts['Pilseta']}</td>
                    <td>{$ieraksts['Stundas']}</td>
                    <td>{$ieraksts['Samaksa']}</td>
                    <td class='apr'>{$ieraksts['Apraksts']}</td>";
                    if(!isset($_SESSION["Epasts"])){
                    echo "<form action='pieteikties.php' method='post'>
                    <td><button type='submit' name='apskatit' value={$ieraksts['Nosaukums']}><i class='fa fa-sign-in'></i></button></td>
                    </form>
                    ";
                    } if(isset($_SESSION["Epasts"])){ 
                    echo "
                    <td><button><i class='fa fa-edit'></i></button></td>
                    <td> <form action='deletev.php' method='post'>
                    <button type='submit' name='dzestv' class='mazs' value={$ieraksts['Vakances_ID']}><i class='fa fa-trash'></i></button>
                    </form> </td>
                     ";} echo "</tr>;";
                    }
                ?>
        </table>
        </div>
        <?php require("footer.php"); ?>