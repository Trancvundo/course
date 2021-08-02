<?php
include 'template/database.php';
include 'template/header.php';
include 'template/menu.php';
?>

<?php
class Persoon{
    private $naam;
    private $achternaam;
    private $straat;
    private $nummer;
    private $plaats;
    private $leeftijd;

    public function __construct($naam, $achternaam, $straat, $nummer, $plaats, $leeftijd) {
        $this->naam = $naam;
        $this->achternaam = $achternaam;
        $this->straat = $straat;
        $this->nummer = $nummer;
        $this->plaats = $plaats;
        $this->leeftijd = $leeftijd;
    }

    public function tonen() {
        echo "<h1>Over mij</h1>";
        echo "<br>";
        echo "Dit is: {$this->naam} {$this->achternaam}. Ik ben {$this->leeftijd} jaar oud.";
        echo "<br>";
        echo "Adress: {$this->straat} {$this->nummer}, {$this->plaats}.";
    }
}
$jaap = new Persoon('Jaap', 'van der Poel', 'dorpstraat', '19', 'Amsterdam', '45'); // Hiermee roep je de constructor aan.
$jaap->tonen();

?>

<?php
include 'template/footer.php';
?>
