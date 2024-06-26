<?php
class Movie
{
    // varibili d'istanza
    private $title;
    private $age;
    // genre diventa array per accettare piu generi
    private genre $genre;
    private $vote;
    private $plot;
    // costruttore fornisce caratteristiche title  e age alle istanze
    public function __construct(string $_title, int $_age, Genre $_genre)
    {
        $this->setTitle($_title);
        $this->setAge($_age);
        $this->setGenre($_genre);
    }
    // metodo getter setter title
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $_title): void
    {
        $this->title = $_title;
    }
    // metodo getter setter age
    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $_age): void
    {
        $this->age = $_age;
    }
    // metodo getter setter genre
    public function getGenre(): Genre
    {
        return $this->genre;
    }

    public function setGenre(Genre $_genre): void
    {
        $this->genre = $_genre;
    }

    // metodo getter setter vote
    public function getVote(): int
    {
        return $this->vote;
    }
    public function setVote(int $_vote): void
    {
        if ($_vote < 1 || $_vote > 10) {
            // sintassi per exception
            throw new Exception('Il voto deve essere compreso tra 1 e 10.');
        }
        $this->vote = $_vote;
    }
    public function getPlot(): string
    {
        return $this->plot;
    }
    public function setPlot(string $_plot): void
    {
        $this->plot = $_plot;
    }
}
