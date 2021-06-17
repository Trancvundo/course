<?php 
$onderwerp = $_GET['onderwerp']; 
$bericht = $_GET['bericht'];
echo $onderwerp;
echo "<br>";
echo $bericht; 
session_start();
unset($_SESSION['status']);
header('location: index.php'); // redirect naar url.
exit;
?>