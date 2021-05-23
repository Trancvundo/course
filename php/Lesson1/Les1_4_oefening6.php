<?php 

$String = "Schrijf een functie die een woorden vervangt voor een ander woorden in een tekst.";

echo str_ireplace("Woorden","woord",$String);

//function maken met return en array (ook $ namen kleine letter gegeven)

function replaceWords($words = array(), $vervangWoorden = array(), $tekst = ""){
    return str_replace($words, $vervangWoorden, $tekst);
}

echo "<br>";
echo replaceWords(array('een', 'woorden'),array('hallo','wereld'),$String);



?>