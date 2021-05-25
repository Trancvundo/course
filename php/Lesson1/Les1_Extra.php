
<?php
//Oefening 1

function multipleBy3($number) {
    return $number * 3; 
}
$b = 8;
echo multipleBy3($b);


//Oefening 2
echo "<br>";
function lengthString($string) {
    return strlen($string);
}
$hallo = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";

echo lengthString($hallo);

//Oefening 3
echo "<br>";
function rekenmachine($number1,$symbool,$number2) {
    if($symbool == "+"){
        return $number1 + $number2;
    }
    elseif($symbool == "-"){
        return $number1 - $number2;
    }
    elseif($symbool == "*"){
        return $number1 * $number2;
    }
    elseif($symbool == "/"){
        return $number1 / $number2;
    }
    else{
        return "Oops something went wrong.";
    }
}
$getal1 = 2;
$getal2 = 3;
echo rekenmachine($getal1,"/",$getal2);

//Oefening 4
echo "<br>";


$raden = 4;

function getalRaden($number){
    $getal = rand(0,10);
    if($number == $getal){
        return "Goed geraden! Het was {$getal}.";
    }elseif($number < $getal){
        return "Het getal was hoger. Het was {$getal}, en het geraden getal was {$number}.";
    }else{
        return "Het getal was lager. Het was {$getal}, en het geraden getal was {$number}.";
    }
}

echo getalRaden($raden);

//Oefening 5
//Snap deze niet, return met meerdere variable?? 
echo "<br>";

function conversion($bedrag,$valuta){
    $bedrag = $bedrag*1.18;
    $valuta = "Dollar";
    return array($bedrag,$valuta);
}

echo conversion(5,"Yin");
echo "????";

//Oefening 6
echo "<br>";

$array = [1,2,3,4,5,6,7,8];
function aantalItemsArray($array){
    return count($array);
}
echo aantalItemsArray($array);

//Oefening 7
echo "<br>";

function cijferLijn($getal){
    $x = "";
    for($i = 1; ;$i++){
        if($i == $getal){
            $x .= $getal;
            return $x;
        }
        $x .= "{$i}-";
    }
}
echo cijferLijn(8);

//Oefening 8
echo "<br>";

$text = "Staat het wword hallo in deze zin?";
function checkHallo($string){
    if(strpos(strtolower($string),'hallo') !== false){
        return "De tekst bevat hallo";
    }else{
        return "De tekst bevat geen hallo";
    }
}
echo checkHallo($text);

//Oefening 9
echo "<br>";

$email = 'piet.db@student.tld';
function usernameEmail($string){
    $arrayUser = explode('@',$string);
    return $arrayUser[0];
}
echo usernameEmail($email);

//Oefening 10
echo '<br>';

$url = 'http://www.studenten.tld/student/1234';
function getalUrl($string){
    $arrayNumber = explode('/',$string);
    return end($arrayNumber); 
}
echo getalUrl($url);

//Oefening 11
echo '<br>';

function arrayUrl($string){
    $arrayNumber1 = explode('://',$string);
    $arrayX = array();
    $arrayX += ['schema' => $arrayNumber1[0]];
    $arrayNumber2 = explode('/',$arrayNumber1[1]);
    $arrayX += ['host' => $arrayNumber2[0]];
    $arrayNumber3 = explode('.tld',$string);
    $arrayX += ['path' => $arrayNumber3[1]];
    return $arrayX;
}
echo var_dump(arrayUrl($url));

//Oefening Extra opdracht
echo '<br>';


function checkLeeftijd($leeftijd,$land){
    $arrayLeeftijd = array(
        array(
            'Land' => 'Belgie',
            'zwakWinkel' => 16,
            'sterkWinkel' => 18,
            'zwakHoreca' => 16,
            'sterkHoreca' => 18
        ),
        array(
            'Land' => 'Finland',
            'zwakWinkel' => 18,
            'sterkWinkel' => 20,
            'zwakHoreca' => 18,
            'sterkHoreca' => 18
        ),
        array(
            'Land' => 'Nederland',
            'zwakWinkel' => 18,
            'sterkWinkel' => 18,
            'zwakHoreca' => 18,
            'sterkHoreca' => 18
        ),
        array(
            'Land' => 'Malta',
            'zwakWinkel' => 17,
            'sterkWinkel' => 17,
            'zwakHoreca' => 17,
            'sterkHoreca' => 17
        ),
        array(
            'Land' => 'Spanje',
            'zwakWinkel' => 18,
            'sterkWinkel' => 18,
            'zwakHoreca' => 18,
            'sterkHoreca' => 18
        )
    );
    $toegstaan = "Is toegestaan om: ";
    $niet = "Is niet toegestaan om: ";
    foreach($arrayLeeftijd as $arrayT){
        if($arrayT['Land'] == $land){
            if($leeftijd > $arrayT['zwakWinkel']){
                $toegstaan .= "Winkelverkoop zwakalcoholhoudend, ";
            }else{
                $niet .= "Winkelverkoop zwakalcoholhoudend, ";
            }
            if($leeftijd > $arrayT['sterkWinkel']){
                $toegstaan .= "Winkelverkoop sterke drank, ";
            }else{
                $niet .= "Winkelverkoop sterke drank, ";
            }
            if($leeftijd > $arrayT['zwakHoreca']){
                $toegstaan .= "Horecaverkoop zwakalcoholhoudend, ";
            }else{
                $niet .= "Horecaverkoop zwakalcoholhoudend, ";
            }
            if($leeftijd > $arrayT['sterkHoreca']){
                $toegstaan .= "Horecaverkoop sterke drank, ";
            }else{
                $niet .= "Horecaverkoop sterke drank, ";
            }
            return $toegstaan . '<br>' . $niet;
        }

    } 


}
echo checkLeeftijd('17','Belgie');
echo '<br>';
