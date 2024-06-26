<?php
class Genre
{
    // inizializzo array vuoto per genre
    private $genres = [];
    // costruttore
    public function __construct(string ...$_genres)
    {
        $this->genres = $_genres;
    }
    // getter
    public function getGenres(): array
    {
        return $this->genres;
    }
    // setter
    public function setGenres(string $_genres): void
    {
        $this->genres[] = $_genres;
    }
}
// nuove istanze
$genre1 = new Genre('Avventura', 'Comedy', 'Fantasy');
$genre2 = new Genre('Comedy', 'Thriller', 'Drama');
$genre3 = new Genre('Drama');
$genre4 = new Genre('Horror');
$genre5 = new Genre('Documentario');
$genre6 = new Genre('Splatter');
$genre7 = new Genre('Animation');
$genre8 = new Genre('Thriller', 'Fantasy');
$genre9 = new Genre('Fantascienza', 'Ironico', 'Documentario', 'Animazione');
$genre10 = new Genre('Fantasy');


// var_dump($genre1);
// var_dump($genre2);
// var_dump($genre3);
// var_dump($genre4);
// var_dump($genre5);
// var_dump($genre6);
// var_dump($genre7);
// var_dump($genre8);
// var_dump($genre9);
// var_dump($genre10);
