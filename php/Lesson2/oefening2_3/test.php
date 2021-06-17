<?php 
$onderwerp = $_GET['onderwerp']; 
$bericht = $_GET['bericht'];
echo $onderwerp;
echo "<br>";
echo $bericht; 
session_start();
session_destroy();
?>