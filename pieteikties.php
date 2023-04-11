<?php
require("header.php");
require("login.php");
require "connect_db.php";
$nosaukums = $_POST['apskatit'];
?>
    <section id="pieteikties">
        <h1 id="pieteiktiesH">
            <button class="btnB"><a href="vakances.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
            Piesakies vakancei par <span> <?php echo $nosaukums?></span></h1>
        <div class="box-container">
        <div class="box">
            <form action="" method="">
                <input type="text" placeholder="Vārds" name="vards" class="vu" title="Vārds" required>
                <input type="text" placeholder="Uzvārds" name="uzvards" class="vu" title="Uzvārds" required>
                <br>
                <input type="number" placeholder="Talrunis" name="talrunis" class="vu" title="Talrunis" required>
                <input type="email" placeholder="E-pasts" name="E-pasts" class="vu" title="E-pasts" required>
                <br>
                <input type="date" placeholder="Dzimšanas dati" name="Dzimšanas dati" class="liel" title="Dzimšanas dati" required>
                <br>
                <input type="file" name="CV" required>
                <br>
                <textarea maxlength="408" placeholder="Komentāri."></textarea>
                <br>
                <input type="submit" value="Piesakies" name="Piesakies" title="Piesakies" class="submit">
            </form>
        </div>
    </div>
    </section>
    <?php require("footer.php"); ?>