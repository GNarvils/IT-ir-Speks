<?php
require("header.php");
session_start();
        if(isset($_SESSION["Epasts"])){ ?>
               <h1 id="vakancesH">
                <button class="btnB"><a href="index.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
                Apskati vakanču pieteikumus.</h1>
            <table class="vakancesP">
            <tr>
                <th>Vards</th>
                <th>Uzvards</th>
                <th>Talrunis</th>
                <th>E-pasts</th>
                <th>Vakances numurs</th>
                <th>Apskati</th>
            </tr>
            <?php
                   require "connect_db.php";
                   $pieteikumuVaicajums = "SELECT * FROM pieteikties";
                   $atlasaPieteikumus = mysqli_query($savienojums, $pieteikumuVaicajums);
                   while($ieraksts = mysqli_fetch_assoc($atlasaPieteikumus)){
                    echo "
                    <tr>
                    <td>{$ieraksts['Vards']}</td>
                    <td>{$ieraksts['Uzvards']}</td>
                    <td>{$ieraksts['Talrunis']}</td>
                    <td>{$ieraksts['Epasts']}</td>
                    <td>{$ieraksts['ID_Vakances']}</td>
                    <form action='pieteikums.php' method='post'>
                    <td><button type='submit' name='apskatit' value={$ieraksts['Pieteikties_ID']}><i class='fa fa-sign-in'></i></button></td>
                    </form>
                    ";
                   }
                ?>
        </table>
        </div>


            <?php
        }else{
                    echo "<div class='pieteiksanaskluda sarkans'>
                    <br>
                    Notikusi kļūda!
                    Lūdzu ielagojieties jūsu kontā!
                  </div>";
                  header("Refresh: 2; url=vakances.php");
        }?>
<?php require("footer.php");?>