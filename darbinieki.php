<?php
require("header.php");
session_start();
        if(isset($_SESSION["Epasts"])){
            require "connect_db.php";
            $Email = $_SESSION["Epasts"];
            $Admin = "";
            $lietotajsAiVaicajums = "SELECT * FROM Lietotaji WHERE Epasts = '$Email' limit 1";
            $atlasaLietotaja = mysqli_query($savienojums, $lietotajsAiVaicajums);
            while($row = mysqli_fetch_assoc($atlasaLietotaja)){
                $Admin = $row["Administrators"];
            }
            if($Admin = 1){ ?>
               <h1 id="vakancesH">
                <button class="btnB"><a href="index.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
                Apskati visus kontus.</h1>
            <table class="darbinieki">
            <tr>
                <th>Lietotājvards</th>
                <th>E-pasts</th>
                <th>Parole</th>
                <th>Talrunis</th>
                <th>Administrators</th>
                <th>Mainīt Paroli</th>
                <th>Statuss</th>
                <th>Rediģēt</th>
            </tr>
            <?php
            require "connect_db.php";
                   $lietotajiVaicajums = "SELECT * FROM Lietotaji";
                   $atlasaLietotaju = mysqli_query($savienojums, $lietotajiVaicajums);
                   while($ieraksts = mysqli_fetch_assoc($atlasaLietotaju)){
                    echo "
                    <tr>
                    <td>{$ieraksts['Lietotajvards']}</td>
                    <td>{$ieraksts['Epasts']}</td>
                    <td>{$ieraksts['Parole']}</td>
                    <td>{$ieraksts['Talrunis']}</td>";
                    if($ieraksts['Administrators'] == 1){
                      echo "<td>Ir</td>";
                    }else{
                        echo "<td>Nav</td>";
                    }
                    echo "<td>{$ieraksts['ParoleM']}</td>
                    <td>{$ieraksts['Statuss']}</td>
                    <form action='darbinieks.php' method='post'>
                    <td><button type='submit' name='rediget' value='{$ieraksts['Lietotaji_ID']}'><i class='fa fa-edit'></i></button></td>
                    </form>
                    ";
                   }
                ?>
        </table>
        </div>


            <?php
        }else{
            echo "<div class='kluda'>
            <br>
            Jums nav privilēģijas šeit būt!
          </div>";
          header("Refresh: 5; url=index.php");
        }
        }else{
                    echo "<div class='kluda'>
                    <br>
                    Notikusi kļūda!
                    Lūdzu ielagojieties jūsu kontā!
                  </div>";
                  header("Refresh: 2; url=index.php");
        }?>
<?php require("footer.php");?>