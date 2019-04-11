<?php

class person
{
  private $name="";
  private $age="";

  public function setName($name="")
  {
    $this->name=$name;
    return $this;
  }
  public function setAge($age="20")
  {
    $this->age=$age;
    return $this;
  }

  public function getInfo()
  {
    echo "Hello, My name is ".$this->name." and my age is ".$this->age." years.";
  }
}

$person = new person();
//  CHAINOVANJE SE DESAVA SAMO IZVAN KLASE I TO NA OBJEKTIMA
$person->setName("Masud Alam")->setAge("33")->getInfo();
