<?php



echo 'OOP, PROGRAMMAZIONE ORIENTATA AD OGGETTI';
echo '<hr>';
// classi e instanze o oggetti
// richiamo classe da User.php
require_once __DIR__ . '/src/User.php';
// class User
// {
//     public string $nome;
//     public string $email;
//     public  int $age;
//     public  bool $isSingle;
// }

// passiamo alle istanze le caratteristiche descritte nella classe(string,int,bool)

$sofia = new User();
$sofia->nome = "Sofia";
$sofia->email = "sofia@email.it";
$sofia->age = 25;
$sofia->isSingle = true;

// passiamo alle istanze le caratteristiche descritte nella classe(string,int,bool)

$stefano = new User();
$stefano->nome = "Stefano";
$stefano->email = "stefano@email.it";
$stefano->age = 30;
$stefano->isSingle = false;

// stampiamo il contenuto delle instanze/oggetti
var_dump($sofia);
echo '<hr>';
var_dump($stefano);


// ***********************************************************************************

// FUNZIONI

class Discount
{
    public $nome;
    public $sconto = 0;

    // SETTER
    public function setSconto(int $eta): void
    {
        if ($eta > 65) {
            $this->sconto = 40;
        }
    }

    // GETTER
    public function getSconto(): string
    {
        return $this->sconto;
    }
}
echo '<hr>';

/* creiamo instanza da classe discount, filippo se ha piu di 65 anni avra sconto di 40
con SETTER settiamo funzione condizione
con GETTER ritorniamo funzione condizione
*/
$filippo = new Discount();
$filippo->nome = "Filippo";
// metodo di un istanza
$filippo->setSconto(40);
// filippo entra in getSconto e ritorna 0 perchè non entra nella condizione (40 > 65)
$sconto_filippo = $filippo->getSconto(); // 0 
// METODO -> FUNZIONE DI UN ISTANZA

var_dump($filippo);
echo '<hr>';


// ***************************************************************************************
// COSTRUTTORE (COSTRUCT)
class User1
{
    public $nome;
    public $eta;
    function __construct(int $_eta)
    {
        $this->eta = $_eta;
    }
}
$filippo = new User1(40);
echo 'eta filippo con costructor' . ' ' . $filippo->eta; // 40
echo '<hr>';
//  il costruttore attribuisce a instanza una caratteristica di default al momento della creazione


// *****************************************************************************************
// prova funzione
// creo class
class User2
{
    // aggiungo caratteristiche
    public $firstName;
    public $lastName;
    // creo funzione che ritorna nome

    public function getFirstName(): string
    {
        return $this->firstName;
    }
}
// creo nuova instanza
$gianni = new user2();
// do a oggetto gianni la caratteristica nome e gli do un valore
$gianni->firstName = 'Gianni';

// stampo metodo che ritorna nome
echo $gianni->getFirstName();
echo '<hr>';

// ****************************************************************************************
class Crew
{
    public $name;
    public $lastName;
    public function getName(): string
    {
        return $this->name;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function setName($nomeeee): void
    {
        $this->name = $nomeeee;
    }
}

$ivan = new Crew();

$ivan->name = "Ivane";
$ivan->lastName = "Marziani";

echo $ivan->getName();
echo '<br>';
echo $ivan->getLastNAme();

echo '<hr>';
$stefano = new Crew();
$stefano->lastName = "Antonelli";
echo $stefano->getLastName();
$stefano->setName('Stefano');
var_dump($stefano);
echo '<hr>';


// **************************************************************************

class Crew2
{
    public $name;
    public $lastName;
    public function __construct(string $_name, string $_lastName)
    {
        $this->name = $_name;
        $this->lastName = $_lastName;
    }
}

$stefano = new Crew2('Stefano', 'Antonelli');
$luca = new Crew2('Luca', 'Menghini');
$alessandro = new Crew2('Alessandro', 'Dalò');
var_dump($stefano);
var_dump($luca);
var_dump($alessandro);


// **************************************************************************
// GETTER E SETTER
class User4
{
    private string $nome;

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $_nome): void
    {
        $this->nome = $_nome;
    }
    // ...
}

// **************************************************************************

// EXEPTIONS
function multiplication($int)
{
    if (!is_int($int)) {
        // se non è un numero lancio istanza
        throw new Exception('ATTENZIONE DEVI INSERIRE UN NUMERO');
    }
    return $int * 5;
}
// con try e catch specifichiamo che il dato inserito non è valido
try {
    // provo a inserire il dato se è ok lo stampo
    echo multiplication('ola');
    // altrimenti stampo messaggio errore
} catch (Exception $error) {
    echo $error->getMessage();
}
echo '<br>';
echo 'il codice va avanti';











?>



<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prove OOP</title>
</head>

<body>

</body>

</html>