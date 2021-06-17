<?php
ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

class Dier {
    public $soort = 'duif';
    public $aantal_poten = 2;
    public $aantal_ogen = 2;
    public $actie = 'vliegen';
    public $kleur = 'groen';

    public function __construct($soort,$aantal_poten,$aantal_ogen,$actie,$kleur) {
        $this->soort = $soort;
        $this->aantal_poten = $aantal_poten;
        $this->aantal_ogen = $aantal_ogen;
        $this->actie = $actie;
        $this->kleur = $kleur;
    }
    public function tonen() {
        echo "Dit is een {$this->soort} en heeft {$this->aantal_poten} poten en {$this->aantal_poten} ogen.";
    }
}
$duif = new Dier('duif',2,2,'vliegen',"grijs");
$kat = new Dier('kat', '4', '2', 'rennen', 'zwart');
$muis = new Dier('muis', '4', '2', 'kruipen', 'grijs');
$duif->tonen();
$kat->tonen();
$muis->tonen();

?>