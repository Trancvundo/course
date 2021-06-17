<!DOCTYPE html>
<html>
<body>
<?php session_start();
if(isset($_SESSION['status'])): ?>
  <h1>Welkom terug <?php echo $_SESSION['gebruikersnaam']; ?></h1>
  <ul>
    <li><a href="profiel.php">Profiel</a></li>
    <li><a href="uitlog.php">Uitloggen</a></li>
    <li><a href="spel.php">Spel</a></li>
  </ul>
<?php else: ?>
  <form method="post">
    <br>
    <label>Gebruikersnaam:</label>
    <br>
    <input type="text" name="gebruikersnaam">
    <br>
    <label>Wachtwoord:</label>
    <br>
    <input type="text" name="wachtwoord">
    <br>
    <br>
    <input type="submit" value="Verzenden">
    <br>
  </form>
  <?php
  
  ini_set('error_reporting', E_ALL); 
  ini_set('display_errors', 1);

  if(isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
    if(isset($_SESSION['gebruikersnaam'])){
      if($_SESSION['gebruikersnaam'] == $_POST['gebruikersnaam'] && $_SESSION['wachtwoord'] = $_POST['wachtwoord']){
        $_SESSION['status'] = "ingelogd";
        header('location: profiel.php');
        exit;
      }
    }else{
      $_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
      $_SESSION['wachtwoord'] = $_POST['wachtwoord'];
      $_SESSION['status'] = "ingelogd";
      header('location: profiel.php');
      exit;
    }
    
  }
  ?>
<?php endif; ?>
</body>







<?php


// Op de andere pagina kun je deze informatie weer ophalen door de sessie te starten:


// Controleren of een waarde bestaat en zo niet maak deze aan:
if(!isset($_SESSION['count'])) {
    $_SESSION['count']=0;
}
echo $_SESSION['count']; 
$_SESSION['count']++; 
echo $_SESSION['count']; 
?>





</html>