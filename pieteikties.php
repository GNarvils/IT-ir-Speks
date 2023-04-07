<?php
$page = "aktualitates";
require("header.php");
require("login.php");
?>
    <section id="pieteikties">
        <h1 id="pieteiktiesH">
            <button class="btnB"><a href="vakances.html" class="back"><img src="images/Atpakaļ.png" alt=""></a></button>
            Piesakies vakancei par <span>SIA "Rimi" IT speciālistu!</span></h1>
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
                <input type="text" placeholder="Izglītība" name="izglitiba" class="liel" title="Izglitiba" required>
                <br>
                <input type="text" placeholder="Darba pieredze" name="Darba pieredze" class="liel" title="Darba pieredze" required>
                <br>
                <input type="text" placeholder="Digitālās prasmes" name="Digitālās prasmes" class="liel" title="Digitālās prasmes" required>
                <br>
                <textarea maxlength="408" placeholder="Komentāri."></textarea>
                <br>
                <input type="submit" value="Piesakies" name="Piesakies" title="Piesakies" class="submit">
            </form>
        </div>
    </div>
    </section>
    <?php require("footer.php"); ?>