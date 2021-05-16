<!DOCTYPE html>
<html>
<body>
<h1> 
<?php 
$Gewicht = 80;
$Lengte = 1.80;
$BMI = round($Gewicht/($Lengte * $Lengte),2);
echo "BMI = " . $BMI;
?>
</h1>
<h1>
<?php 
if ($BMI < 18.5){
    echo "Ondergewicht";
} elseif ($BMI < 25){
    echo "Gezond gewicht";
} elseif ($BMI < 30){
    echo "Overgewicht";
} else{
    echo "Obesitas";
}
?>
</h1>
</body>
</html>