<?php 

# Esercizi
// 1. Realizza uno script PHP che ricostruisca e stampi a video le prime parole del "Lorem Ipsum" contenute negli elementi del seguente array:

$array = [
    "Lorem",
    "ipsum",
    [
        "dolor",
        [
            "sit",
            "amet",
        ],
        "consectetur"
    ],
    [
        "adipiscing"
    ],
    "elit"  
]; 

// echo $array[0] . ' '; // Lorem
// echo $array[1] . ' '; // ipsum
// echo $array[2][0] . ' '; // dolor
// echo $array[2][1][0] . ' '; // sit
// echo $array[2][1][1] . ' '; // amet
// echo $array[2][2] . ' '; // consectetur
// echo $array[3][0] . ' '; // adipiscing
// echo $array[4] . ' '; // elit

$lorem = '';
$i = 0;
while ($i < count($array)) {
    
    if (is_string($array[$i])) {
        $lorem .= $array[$i] . ' ';
    }
    
    $i++;
}

// echo $lorem;




// 2. Realizza due semplici classi PHP di esempio legate da un rapporto di ereditarietà.

class Persona {
    
    protected $nome;
    protected $cognome;
    protected $eta;

    public function __construct($_nome, $_cognome, $_eta)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;  
        $this->eta = $_eta;       
    }

    public function setNome($_nome) {
        $this->nome = $_nome;
    }
    
    public function setCognome($_cognome) {
        $this->cognome = $_cognome;
    }

    public function setEta($_eta) {
        $this->eta = $_eta;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function getEta() {
        return $this->eta;
    }

}

class Studente extends Persona {

    protected $materia;

    public function __construct($_nome, $_cognome, $_eta, $_materia)
    {
        parent::__construct($_nome, $_cognome, $_eta);
        $this->materia = $_materia;
    }
}

$persona_1 = new Persona('Leonardo', 'Barone', 29);
$persona_2 = new Persona('Salvatore', 'Quasimodo', 67);
$persona_3 = new Studente('Ugo', 'Foscolo', 51, 'Italiano');

// 3. Fornisci una o più query SQL che creino una tabella completa capace di ospitare i dati anagrafici di un utente.

/* CREATE TABLE `prova`.`utenti` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `cognome` VARCHAR(100) NOT NULL , `eta` TINYINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; */

// 4. Usando come base l'esercizio 3, realizza un form in grado di inviare i dati necessari al completamento dell'anagrafica realizzata. Non è necessario che i dati siano effettivamente inviati a un web-server e inseriti in un DB, ma è gradita una verifica pre-invio.

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="POST" action="./post.php">
            <div>
                <label for="nome">Nome</label>
                <input name="nome" id="nome" type="text" placeholder="inserisci nome">
            </div>
            <div>
                <label for="cognome">Cognome</label>
                <input name="cognome" id="cognome" type="text" placeholder="inserisci cognome">
            </div>
            <div>
                <input type="submit" value="Invia">
            </div>

        </form>
    </body>
</html>
