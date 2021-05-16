<?php 

$Naam = "Jan";
$Leeftijd = 20;
$Relatie = FALSE;
$Tshirt = "Groen";
$Kleur = array("Oranje","Rood","Blauw","Wit");

if ( $Naam == "Pietje" || $Leeftijd < 18 || $Relatie || !in_array($Tshirt,$Kleur)){
    echo "Niet toegelaten";
} else{
    echo "Toegelaten";
}

?>