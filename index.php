
<?php
$page = "sakums";
require("header.php");
require("login.php");
?>
    <section id="sakums">
        <div class="content">
            <h2>Sāc savu IT stāstu!</h2>
            <p>Sāc savu jauno IT karjēru vai iepazīsties ar jaunām IT aktualitātēm šajā vietnē!</p>
        </div>
        <div class="image">
            <img src="images/sakums.png" alt="">
        </div>
    </section>
    <section id="vakances">
        <div class="image">
            <img src="images/vakances.png" alt="">
        </div>
        <div class="content">
            <h2>Sāc savu IT karjēru!</h2>
            <p>Ja meklējat jaunu darbu, mēs iesakam iepazīties ar kādām no pieejamām vakancēm un sākt jūsu IT karjēru!</p>
            <a href="vakances.php"><button class="poga">Piesakies vakancei!</button></a>
        </div>
    </section>
    <section id="aktualitates">
    <div class="image">
            <img src="images/aktualitates.png">
        </div>
        <div class="content">
            <h2>Iepazinies ar šo jomu!</h2>
            <p>Ja gribat būt informēt uz jaunākām IT aktualitātēm, jūs varat jau to sākt tagad, lasot šeit!</p>
            <a href="aktualitates.php"><button class="poga">Apskatiet aktualitātes!</button></a>
        </div>
    </section>
<?php require("footer.php"); ?>