<?php  if(isset($_POST["Autorizējies"])){
								require "connect_db.php";
								session_start();
		
								$Epasts = mysqli_real_escape_string($savienojums, $_POST["Epasts"]);
								$Parole = mysqli_real_escape_string($savienojums, $_POST["Parole"]);
		
								$sqlVaicajums = "SELECT * FROM lietotaji WHERE Epasts = '$Epasts'";

								$rezultats = mysqli_query($savienojums, $sqlVaicajums);
								if(mysqli_num_rows($rezultats) == 1){
									while($row = mysqli_fetch_array($rezultats)){
										if($row["Statuss"] == "Aktīvs"){
										if(password_verify($Parole, $row["Parole"])){
											$_SESSION["Epasts"] = $Epasts;
											header("location:index.php");
										}else{
											echo "<div class='kluda'>
											Nepareizs e-pasts vai parole!
											</div>";
											header("Refresh:3");
										}
									}else{
										echo "<div class='kluda'>
										Konts nav aktīvs! Sazinieties ar administratoru.
										</div>";
										header("Refresh:3");
									}
								}
								}else{
									echo "<div class='kluda'>
									Nepareizs e-pasts vai parole!
									</div>";
									header("Refresh:3");
								}
		
							}
		?>
    <div class="autorizeties">
        <form action='#' method='post'>
        <button class = "close">X</button>
        <h2>Autorizējies</h2>
        <input type="email" placeholder="E-pasts" name="Epasts" title="Epasts" required>
        <br>
        <input type="password" placeholder="Parole" name="Parole" title="Parole" required>
        <br>
        <input type="submit" value="Autorizējies" name="Autorizējies" title="Autorizējies" class="Abtn">
        <br>
        <a href="parolem.php"> Aizmirsi paroli!</a>
    </form>
     </div>