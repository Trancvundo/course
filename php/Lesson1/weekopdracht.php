
<?php
// censor
$text = "dit is. Eikel test. deze tekst. kak? omgdfsdsfezet worden. in! hoofdletters. fdsf";
$textCount = str_word_count($text);
$VervangWoorden = 0;
$kleur = " ";
function censor($text)
{
    global $VervangWoorden;
    global $kleur;
    $text2 = preg_split('/\b/', $text);
    $GroveWoorden2 = array(
        "pis",
        "poep",
        "kloot",
        "lul",
        "fuck",
        "kak",
        "eikel"
    );
    $AardigeWoorden = array(
        "aardbei",
        "banaan",
        "citroen",
        "druif",
        "framboos",
        "grapefruit"
    );
    $GroveWoorden = array(
        "pis" => "red",
        "poep" => "yellow",
        "kloot" => "green",
        "lul" => "red",
        "fuck" => "red",
        "kak" => "green",
        "eikel" => "yellow"
    );
    $i = 0;
    $VervangWoorden = 0;
    foreach($text2 as $woord){
        if(in_array(strtolower($woord),$GroveWoorden2)){
            $text2[$i] = $AardigeWoorden[rand(0,(count($AardigeWoorden)-1))];
            if($GroveWoorden[strtolower($woord)] == "red" || $kleur == "red"){
                $kleur = "red";
            } elseif($GroveWoorden[strtolower($woord)] == "yellow" || $kleur == "yellow"){
                $kleur = "yellow";
            }else{
                $kleur = "green";
            }
            $VervangWoorden++;
        }
        $i++;
    }
    $text2 = implode('', $text2);
    return $text2;
}
$text = censor ($text);
echo $text . "<br>";
echo "Het aantal grove woorden dat verandert is " . $VervangWoorden . ".<br>";
echo "Kleur is " . $kleur . "<br>";
//Hoofdletters

$VervangHoofdletters = 0;
//$text = "dit is een test. Deze tekst. moet? omgezet worden. in! hoofdletters. fdsf";
function capitalise($text)
{
    global $VervangHoofdletters;
    $text2 = preg_split('/(?<=[.?!])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    foreach($text2 as $woord){
        if(!ctype_upper($woord{0})){
            $VervangHoofdletters++;
        }
    }
    $text2 = array_map('ucfirst', $text2);
    $text2 = implode(' ', $text2);
    return $text2;
}
$text = capitalise ($text);
echo $text . "<br>";
echo "Het aantal gecorrigeerde hoofdletters is " . $VervangHoofdletters . ".<br>";


// Long text
function short($text, $maxLength)
{
    if(strlen($text)>$maxLength){
        $text2 = substr($text,0,$maxLength) . "...";
    }else{
        $text2 = $text;
    }
    return $text2;
}
$text = short($text, 30);
echo $text . "<br>";


//kleur
function indication($text)
{
    global $kleur;
    echo '<span style="color:' . $kleur . '">' . $text . '</span>';
}

$text = indication($text);
echo $text . "<br>";

//statistiek
$pergentage = round((($VervangWoorden/$textCount) * 100),1);
echo "<table>";
echo "<tr>" . "<th>Aantal woorden</th>" . "<th>Aantal vervangen woorden</th>" . "<th>Aantal gecorrigeerde hoofdletters</th>" . "<th>Pergentage vervangen woorden</th>" . "</tr>";
echo "<tr>" . "<th>" . $textCount . "</th>" . "<th>" . $VervangWoorden . "</th>" . "<th>" . $VervangHoofdletters . "</th>" . "<th>" . $pergentage . "</th>" . "</tr>";
echo "</table>";

?>
