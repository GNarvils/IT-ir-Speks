
<?php  
        require "header.php";
        session_start();
        if(isset($_SESSION["Epasts"])){
                ?>
 <section id="aktualitate">
        <h1 id="aktualitatesH1">
            <button class="btnB"><a href="aktualitates.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
            Rediģē aktualitāti.</h1>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require "connect_db.php";

                    if(isset($_POST['redigetA'])){
                        $mainit_Bilde = $_POST['bildeR'];
                        $mainit_Virsraksts = $_POST['virsrakstsR'];
                        $mainit_Apraksts = $_POST['aprakstsR'];
                        $mainit_Raksts = $_POST['rakstsR']; 
                        $rediget_aktualitati_SQL = "UPDATE aktualitates SET Bilde = '$mainit_Bilde', Virsraksts = '$mainit_Virsraksts', Apraksts = '$mainit_Apraksts', Raksts = '$mainit_Raksts' WHERE Aktualitates_ID = ".$_POST['redigetA'];
                        if(mysqli_query($savienojums, $rediget_aktualitati_SQL)){
                            header("Refresh:0; url=aktualitates.php");
                        }else{
                            echo "<div class='kluda'>Kļūda sistēmā!</div>";
                            header("Refresh:1; url=aktualitates.php");
                        }
                    }else{

                    $redigetID = $_POST["edita"];
                    $atlasit_aktualitati_SQL = "SELECT * FROM aktualitates WHERE Aktualitates_ID = $redigetID";
                    $atlasa_Aktualitati = mysqli_query($savienojums, $atlasit_aktualitati_SQL);
                    while($ieraksts = mysqli_fetch_assoc($atlasa_Aktualitati)){
                        echo "
                            <table>
                            <form method='POST'>
                            <tr><td>Bilde:</td>
                            <td><input type='text' name='bildeR' value='{$ieraksts['Bilde']}' class = 'liel' required></td></tr>
                            <tr><td>Virsraksts:</td>
                            <td> <input type='text' placeholder='Ievadi aktualitātes virsrakstu*' name='virsrakstsR' value='{$ieraksts['Virsraksts']}' required></td></tr>        
                            <tr><td>Apraksts:</td>
                            <td><input type='text' placeholder='Ievadi aktualitātes aprakstu*' name='aprakstsR' title='Attēls' value='{$ieraksts['Apraksts']}' maxlength='255' required></td></tr>
                            <tr><td>Raksts:</td>
                            <td> <textarea type='text' placeholder='Ievadi rakstu*' name='rakstsR' required>{$ieraksts['Raksts']}</textarea></td></tr>        
                            <td colspan='2'><button type='submit' name='redigetA' value='{$ieraksts['Aktualitates_ID']}'>Rediget</button></td>
                            </form>
                            </table>
                        ";
                    }

                }}else{
                    echo "<div class='kluda'>Kaut kas nogāja greizi! Atgriezies iepriekšējā lapā un mēģini velreiz!</div>";
                    header("Refresh:2; url=aktualitates.php");
                }
            ?>

</section>
<?php 
}else{
            echo "<div class='kluda'>
            <br>
            Notikusi kļūda!
            Lūdzu ielagojieties jūsu kontā!
          </div>";
          header("Refresh: 2; url=login.php");
}?>
<?php include "footer.php" ?>