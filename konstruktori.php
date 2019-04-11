<?php

class user {

    private $name;        //$n  -> atributi
    private $forename;    //$fn
    private $birthday;    //$bd

    //constructor
    public function __construct($n, $fn, $bd) { //-> u argumentu se deklarisu neke promenljive
        if (strlen($n) >= 3 && strlen($fn) >= 2) {
            $this->name = $n; //ako argument $n odgovara zahtevu onda postaje objekat $this->name
            $this->forename = $fn; //i tada je arg $fn postao objekat $this->forename
        }
        $this->birthday = $bd; // u svakom slucaju arg $bd postaje objekat $this->birthday
    }

    //ZAKLJUCAK: PUTEM KONSTRUKTORA SE ATRIBUTIMA/OBJEKTIMA DODELJUJU VREDNOSTI ARGUMENATA
    //ARGUMENTI MOGU POTICATI IZ DRUGIH KLASA - dependency injection

    //Getter-Methode
    public function getName() {
        if ($this->name != "") {
            return $this->name;
        } else {
            return "<strong style='color:red'> Name required.</strong>";
        }
    }

    public function getForename() {
        if ($this->forename != "") {
            return $this->forename;
        } else {
            return "<strong style='color:red'>Forename required.</strong>";
        }
    }

    public function getBirthday() {
        if ($this->birthday != "") {
            return $this->birthday;
        } else {
            return "<strong style='color:red'>Birthday required.</strong>";
        }
    }

    public function getUsername() {
        if ($this->username != "") {
            return $this->username;
        } elseif ($this->name != "" && $this->forename != "") {
            $this->createUN();
            return $this->username;
        } else {
            return"<strong style='color:red'>Username can not created. </strong>";
        }
    }

}

$user1 = new user("Luka", "rrr", "10.02.1991");  //Object with contructor
echo $user1->getForename();
echo $user1->getName();
echo $user1->getBirthday();
