<?php
session_start();
?>
<form method="post">
    <br>
    <label>Gebruikersnaam:</label>
    <br>
    <input type="text" name="gebruikersnaam" value=<?php $gebruikersnaam = $_SESSION['gebruikersnaam']; echo $gebruikersnaam;?>>
    <br>
    <label>Wachtwoord:</label>
    <br>
    <input type="text" name="wachtwoord" value=<?php $wachtwoord = $_SESSION['wachtwoord']; echo $wachtwoord;?>>
    <br>
    <label>Biografie:</label>
    <br>
    <input type="text" name="biografie" value=<?php $biografie = $_SESSION['biografie']; echo $biografie;?>>
    <br>
    <label>Geboortedatum:</label>
    <br>
    <input type="text" name="geboortedatum" value=<?php $geboortedatum = $_SESSION['geboortedatum']; echo $geboortedatum;?>>
    <br>
    <label>Email:</label>
    <br>
    <input type="text" name="email" value=<?php $email = $_SESSION['email']; echo $email;?>>
    <br>
    <label>Telefoonnummer:</label>
    <br>
    <input type="text" name="telefoonnummer" value=<?php $telefoonnummer = $_SESSION['telefoonnummer']; echo $telefoonnummer;?>>
    <br>
    <input type="submit" value="Verzenden">
    <br>
</form>
<?php
if(isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
    $_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
    $_SESSION['wachtwoord'] = $_POST['wachtwoord'];
    $_SESSION['biografie'] = $_POST['biografie'];
    $_SESSION['geboortedatum'] = $_POST['geboortedatum'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telefoonnummer'] = $_POST['telefoonnummer'];
    header('location: profiel.php');
    exit;
}
?>
<a href="test.php">Uitloggen</a>
<br>
<a href="index.php">Home</a>