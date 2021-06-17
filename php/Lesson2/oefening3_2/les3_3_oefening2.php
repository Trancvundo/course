<?php
ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

class Klok {
    private $dag = 0;
    public $uur = 0;
    public $min = 0;
    public $sec = 0;

    public function tonen() {
        echo "Dit is een klok.<br>Uur: {$this->uur}<br>min: {$this->min}<br>Sec: {$this->sec}<br>";
    }
    public function tikken(){
        echo "Tik";
    }
    public function lopen() {
        while ($this->min < 2){
            $this->sec++;
            $this->tonen();
            if ($this->sec == 60){
                $this->sec = 0;
                $this->min++;

            }
        }
    }
}
$klok = new Klok();
$klok->lopen();


?>