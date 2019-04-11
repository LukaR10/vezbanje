<?php

class Logger {
    //metoda koja se treba iskoristiti u drugoj klasi
    public function log($message) {
        echo "Poruka: $message";
    }
}

class UserProfile {
    //pomocni atribut
    private $logger;

    //dodeljivanje svojine pomocnom atributu; naravno iz druge klase (Logger $logger)
    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function createUser() {
        //koriscenje pomocnog atributa u metodi kao onog koji ima pristup spolja/ u drugu klasu
        $this->logger->log('Kreiran je korisnik <br>');
    }

    public function updateUser() {
        $this->logger->log('Promenjen je korisnik <br>');
    }

    public function deleteUser() {
        $this->logger->log('Izbrisan je korisnik <br>');
    }


}
//instanciranje objekta
$logger = new Logger();
//prosledjivanje instanciranog objekta kao argumenta u drugu klasu
$profile = new UserProfile($logger);

$profile->createUser();
$profile->updateUser();
$profile->deleteUser();
