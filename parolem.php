<?php
require("header.php");
require("login.php");
if(isset($_POST["Parole"])){
    require "connect_db.php";
    $Epasts = $_POST["Epasts"];
    $sqlVaicajums = "SELECT * FROM lietotaji WHERE Epasts = '$Epasts'";
								$rezultats = mysqli_query($savienojums, $sqlVaicajums);
								if(mysqli_num_rows($rezultats) == 1){
									while($row = mysqli_fetch_array($rezultats)){
                                        $rediget_litotaji_SQL = "UPDATE lietotaji SET ParoleM = 'Grib' WHERE Epasts = '$Epasts'";
                                        if(mysqli_query($savienojums, $rediget_litotaji_SQL)){
                                            echo "<div class='zals'>Aizsūtīts paziņojums par paroles maiņu!</div>";
                                            header("Refresh:3; url=index.php");
                                      }else{
                                            echo "<div class='kluda2'>Kļūda sistēmā!</div>";
                                            header("Refresh:3; url=index.php");
                                     }
									}
                                    }else{
									echo "<div class='kluda2'>
									Tāds konts neiksistē!
									</div>";
									header("Refresh:3; url=index.php");
								}
		
							
                            }else{
?>
<h1 id="Parole">
<button class="btnB"><a href="index.php" class="back"><img src="images/Atpakal.png" alt=""></a></button>
Paprasiet administratoram jaunu paroli.</h1>
<section id='pieteikties'>
    <div class='box-container'>
    <div class='box'>
    <form action='' method='POST'> 
        <input type="email" placeholder="E-pasts" name="Epasts" title="Epasts" required>
        <br>
        <input type="submit" value="Atkopo paroli" name="Parole" title="Parole" class="Abtn">
    </form>
     </div>
     </div>
</section>






<?php }require("footer.php");?>