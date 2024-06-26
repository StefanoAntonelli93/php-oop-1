<?php
class Actor
{
    // inizializzo array vuoto per actors
    private $actors = [];
    public function __construct(string ...$_actors)
    {
        $this->actors = $_actors;
    }
    // getter
    public function getActors(): array
    {
        return $this->actors;
    }
    // setter
    public function setActors(string $_actors): void
    {
        $this->actors = $_actors;
    }
}

// nuove istanze
$cast1 = new Actor('Shrek', 'Ciuchino', 'Gatto', 'Fiona', 'Principe Azzurro');
$cast2 = new Actor('Shrek2', 'Ciuchino2', 'Gatto2', 'Fiona2', 'Principe Azzurro2');
$cast3 = new Actor('Shrek3', 'Ciuchino3', 'Gatto3', 'Fion3a', 'Principe Azzurro3');
$cast4 = new Actor('Shrek4', 'Ciuchino4', 'Gatto4', 'Fiona4', 'Principe Azzurro4');

// var_dump($cast1);
