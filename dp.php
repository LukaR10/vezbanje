<?php

//dependency injection

class A {
    public function zbir($a, $b) {
        $rez = $a + $b;
        return $rez;
    }
}

class B {
    //pomocni properti koji ce biti instanca(objekat) dependovane klase
    public $pomocni;
    //injektovanje svih vrednosti u pomocni properti preko (A $pomocni)
    public function __construct(A $pomocni) {
        $this->pomocni = $pomocni;
    }

    public function racun() {
        return $this->pomocni->zbir(5, 6);
    }
}

$objekatA = new A();
//ovde se vrsi dependovanje
$objekatB = new B($objekatA);

echo $objekatB->racun();
