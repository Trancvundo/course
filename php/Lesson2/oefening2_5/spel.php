<?php
session_start();
$raden = 7;
if(!isset($_SESSION['winst'])) {
    $_SESSION['winst']=0;
}
if(!isset($_SESSION['verlies'])) {
    $_SESSION['verlies']=0;
}



function getalRaden($number){
    $getal = rand(0,7) + rand(0,7);
    if($number == $getal){
        $_SESSION['winst']++;
        return "Goed! Het was {$getal}.";     
    }elseif($number < $getal){
        $_SESSION['verlies']++;
        return "Het getal was hoger. Het was {$getal}.";
        
    }else{
        $_SESSION['verlies']++;
        return "Het getal was lager. Het was {$getal}.";
    }
}
if(isset($_POST['button1'])) {
    echo getalRaden($raden);
}

?>
<form method="post">
    <input type="submit" name="button1"
            value="Button1"/>
</form>
<?php
echo "Winst: " . $_SESSION['winst'];
echo "<br>";
echo "Verlies: " . $_SESSION['verlies'];
echo "<br>";
echo round(($_SESSION['winst']/$_SESSION['verlies']*100),2) . "%"
?>
<br>
<a href="index.php">Home</a>