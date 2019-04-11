<?php

class Racunanje {

    public function data() {

        $l = array(
        'prolece' => ['mart', 'april', 'maj'],
        'leto' => ['jun', 'jul', 'avgust'],
        'jesen' => ['septembar', 'oktobar', 'novembar'],
        'zima' => ['decembar', 'januar', 'februar']
        );
        return $l;
    }
}

class MojaKlasa extends Racunanje  {

    public function uzmi() {
        //SUSTINSKA STVAR: OBJEKAT SE U KLASI POZIVA SA THIS
        foreach ($this->data()['zima'] as $key) {
            echo $key . "<br>";
        }
    }

}
// SUSTINSKA STVAR: OBJEKAT SE VAN KLASE POZIVA U PROMENLJIVOJ
$obj = new MojaKlasa();
$obj->uzmi();
