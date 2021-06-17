<!DOCTYPE html>
<html>
<head>
<?php include('les3_1_oefening1_tiltle.php'); ?>
</head>

<body>
<?php include('les3_1_oefening1_body.php'); ?>

<ul>
  <?php include('les3_1_oefening1_menu.php'); ?>
</ul>

</body>
<a href="test.php?onderwerp=dit is een test&bericht=halllo wereld" title="Test">Open test</a>
<br>
<?php

session_start(); 

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