<?php 

$String = "Voorbeeld";

echo strlen($String);

//function maken met return
echo "<br>";

function strLength($String){
    return strlen($String);
}

echo "Het aantal tekens is " . strLength("Voorbeeld tekst")

?>