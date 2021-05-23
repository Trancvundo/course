<?php 

$String = "Cultivar a, trifecta instant skinny, espresso, con panna, crema spoon mocha, in coffee, sugar, french press medium latte trifecta instant to go. Breve skinny cinnamon grounds grinder, cortado, dark cup, crema percolator turkish, decaffeinated aromatic aftertaste redeye iced chicory. Single origin, steamed at seasonal, aged iced galão aftertaste beans sweet mug, extra filter, in, cappuccino, white con panna, frappuccino aftertaste frappuccino qui chicory. Grinder medium et so, and java, trifecta, at, extra café au lait trifecta, organic blue mountain coffee dark single origin. Viennese, aroma filter saucer cinnamon and, white, to go, crema coffee so lungo grounds, cultivar percolator french press acerbic americano siphon. Steamed eu est blue mountain, mug decaffeinated cortado strong, so as mug espresso acerbic sugar french press aroma.";

$String2 = str_ireplace(",","",$String);
$String3 = str_ireplace(".","",$String2);
$String4 = strtolower("$String3");
echo $String4;
echo "<br>";
$ArrayString = explode(" ",$String4);
echo count($ArrayString);
echo "<br>";
echo var_dump($ArrayString);

//function maken met return kan ook met array
echo "<br>";

function splitIntoArray($text){
    $text = str_replace(array('.',','),array('',''),strtolower($text));
    return explode(' ',$text);
}

print_r(splitIntoArray($String));


?>