
<?php  
        require "header.php";
        session_start();
        if(isset($_SESSION["Epasts"])){
            ?><h1 id="vakancesE">
            <button class="btnB"><a href="vakances.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
            Rediģē vakanci.</h1>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require "connect_db.php";

                    if(isset($_POST['redigetV'])){
                        $mainit_Logo = $_POST['bildeR'];
                        $mainit_Nosaukums = $_POST['nosaukumsR'];
                        $mainit_Profesija = $_POST['profesijaR'];
                        $mainit_Pilseta = $_POST['pilsetaR'];
                        $mainit_Stundas = $_POST['stundasR'];  
                        $mainit_Samaksu = $_POST['samaksaR']; 
                        $mainit_Aprakstu = $_POST['aprakstsR'];
                        $statuss = $_POST['Statuss'];
                       $rediget_vakanci_SQL = "UPDATE vakance SET Logo = '$mainit_Logo', Nosaukums = '$mainit_Nosaukums', Profesija = '$mainit_Profesija', Pilseta = '$mainit_Pilseta', Stundas = '$mainit_Stundas', Samaksa = '$mainit_Samaksu', Apraksts = '$mainit_Aprakstu', ID_Statuss = '$statuss' WHERE Vakances_ID = ".$_POST["redigetV"];
                       if(mysqli_query($savienojums, $rediget_vakanci_SQL)){
                            header("Refresh:0; url=vakances.php");
                      }else{
                            echo "<div class='kluda'>Kļūda sistēmā!</div>";
                            header("Refresh:2; url=vakances.php");
                     }
                    }else{
                    $redigetID = $_POST["editv"];
                    $atlasit_vakanci_SQL = "SELECT * FROM vakance WHERE Vakances_ID = $redigetID";
                    $atlasa_vakanci = mysqli_query($savienojums, $atlasit_vakanci_SQL);
                    while($ieraksts = mysqli_fetch_assoc($atlasa_vakanci)){
                        echo "
                        <section id='pieteikties'>
                        <div class='box-container'>
                        <div class='box'>
                            <form action='' method='POST'>    
                            <input type='text' placeholder='Ievadi logo URL*' name='bildeR' class='liel' title='Bilde' value='{$ieraksts['Logo']}' required>
                            <br>
                            <input type='text' placeholder='Ievadi uzņēmuma nosaukumu*' name='nosaukumsR' class='ievietot' value='{$ieraksts['Nosaukums']}' title='Nosaukums' maxlength='45'required>
                            <br>
                            <input type='text' placeholder='Ievadi profesiju*' name='profesijaR' class='ievietot' title='Profesija' value='{$ieraksts['Profesija']}' maxlength='60'required>
                            <br>
                            <input type='text' placeholder='Ievadi pilsētu*' name='pilsetaR' class='ievietot' title='Pilsēta' value='{$ieraksts['Pilseta']}' maxlength='50' required>
                            <br>
                            <input type='text' placeholder='Ievadi darba stundas*' name='stundasR' class='ievietot' value='{$ieraksts['Stundas']}' title='Stundas' maxlength='40' required>
                            <br>
                            <input type='text' placeholder='Ievadi darba samaksu*' name='samaksaR' class='ievietot' value='{$ieraksts['Samaksa']}' title='Samaksa' maxlength='12' required>
                            <br>
                            <textarea type='text' placeholder='Ievadi aprakstu*' name='aprakstsR' required>{$ieraksts['Apraksts']}</textarea>
                            <br>   
                            <p>Aktīva</p><input type='radio' name='Statuss' value='1' class='status' checked='checked'>
                            <p>Neaktīva</p><input type='radio' name='Statuss' value='2' class='status'>
                            <br>
                            <button type='submit' name='redigetV' value='{$ieraksts['Vakances_ID']}'>Rediget</button>

                        </form>
                        </div>
                        </div>
                        </section>
                        ";
                    }

                }}else{
                    echo "<div class='kluda'>Kaut kas nogāja greizi! Atgriezies iepriekšējā lapā un mēģini velreiz!</div>";
                    header("Refresh:2; url=vakances.php");
                }
}else{
            echo "<div class='kluda'>
            <br>
            Notikusi kļūda!
            Lūdzu ielagojieties jūsu kontā!
          </div>";
          header("Refresh: 2; url=login.php");
}?>
<?php include "footer.php" ?>