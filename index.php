<?php
// richiamo le classi
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/Genre.php';
require_once __DIR__ . '/models/Actor.php';
require_once __DIR__ . '/models/UpperCase.php';


// messaggio di errore inizialmente è vuoto
$error = '';

// try catch utili per trovare un errore
try {


    // istanze
    // movie 1

    $movie1 = new Movie('Shrek', 2001, null, $cast1);
    $movie1->setVote(8);
    // $movie1->setGenre('Animation');
    $movie1->setPlot('Shrek, a solitary ogre, is angered when fairy tale creatures are sent to live in his swamp ordered by Lord Farquaad. He befriends a talking donkey named Donkey, and they set off to meet with Farquaad.
    
    The lord needs Princess Fiona to marry him so he will become the king of Duloc. When Shrek and Donkey visit him, they are forced to rescue her from an enormous fire-breathing dragon named Dragon in exchange for Shrek\'s swamp being vacated. The Dragon turns out to be female, and after a minute or two falls in love with Donkey.
    
    Donkey, Shrek, and Fiona escape, and Dragon chases them. Once Shrek and Donkey rescue Fiona, they take her back to Lord Farquaad. Along the way, Shrek begins to fall in love with Fiona. Donkey finds out from Fiona that she is cursed and turns into an ogre at night. The only way the curse can be broken is by true love\'s first kiss. Fiona and Farquaad have a marriage ceremony, but they are interrupted by Shrek, who tells Fiona he loves her.
    
    Donkey and Dragon enter, and Dragon eats Farquaad. Shrek and Fiona kiss and Fiona is permanently turned into an ogre. Shrek gets his swamp back, and the two marry there. After a karaoke party, the newlyweds set off on their honeymoon. ');


    // movie 2
    $movie2 = new Movie('Shrek 2', 2004, $genre9, $cast2);
    $movie2->setVote(8);
    // $movie2->setGenre('Animation', 'Comedy');
    $movie2->setPlot('Shrek, a solitary ogre, is angered when fairy tale creatures are sent to live in his swamp ordered by Lord Farquaad. He befriends a talking donkey named Donkey, and they set off to meet with Farquaad.
    
    The lord needs Princess Fiona to marry him so he will become the king of Duloc. When Shrek and Donkey visit him, they are forced to rescue her from an enormous fire-breathing dragon named Dragon in exchange for Shrek\'s swamp being vacated. The Dragon turns out to be female, and after a minute or two falls in love with Donkey.
    
    Donkey, Shrek, and Fiona escape, and Dragon chases them. Once Shrek and Donkey rescue Fiona, they take her back to Lord Farquaad. Along the way, Shrek begins to fall in love with Fiona. Donkey finds out from Fiona that she is cursed and turns into an ogre at night. The only way the curse can be broken is by true love\'s first kiss. Fiona and Farquaad have a marriage ceremony, but they are interrupted by Shrek, who tells Fiona he loves her.
    
    Donkey and Dragon enter, and Dragon eats Farquaad. Shrek and Fiona kiss and Fiona is permanently turned into an ogre. Shrek gets his swamp back, and the two marry there. After a karaoke party, the newlyweds set off on their honeymoon. ');

    // movie 3
    $movie3 = new Movie('Shrek the Third', 2007, $genre2, $cast3);
    $movie3->setVote(7);
    // $movie3->setGenre('Animation', 'Comedy');
    $movie3->setPlot('Shrek, a solitary ogre, is angered when fairy tale creatures are sent to live in his swamp ordered by Lord Farquaad. He befriends a talking donkey named Donkey, and they set off to meet with Farquaad.
    
    The lord needs Princess Fiona to marry him so he will become the king of Duloc. When Shrek and Donkey visit him, they are forced to rescue her from an enormous fire-breathing dragon named Dragon in exchange for Shrek\'s swamp being vacated. The Dragon turns out to be female, and after a minute or two falls in love with Donkey.
    
    Donkey, Shrek, and Fiona escape, and Dragon chases them. Once Shrek and Donkey rescue Fiona, they take her back to Lord Farquaad. Along the way, Shrek begins to fall in love with Fiona. Donkey finds out from Fiona that she is cursed and turns into an ogre at night. The only way the curse can be broken is by true love\'s first kiss. Fiona and Farquaad have a marriage ceremony, but they are interrupted by Shrek, who tells Fiona he loves her.
    
    Donkey and Dragon enter, and Dragon eats Farquaad. Shrek and Fiona kiss and Fiona is permanently turned into an ogre. Shrek gets his swamp back, and the two marry there. After a karaoke party, the newlyweds set off on their honeymoon. ');

    // movie 4
    $movie4 = new Movie('Shrek Forever After', 2010, $genre8, null);
    $movie4->setVote(8);
    // $movie4->setGenre('Animation', 'Family', 'Comedy');
    $movie4->setPlot('Shrek, a solitary ogre, is angered when fairy tale creatures are sent to live in his swamp ordered by Lord Farquaad. He befriends a talking donkey named Donkey, and they set off to meet with Farquaad.
    
    The lord needs Princess Fiona to marry him so he will become the king of Duloc. When Shrek and Donkey visit him, they are forced to rescue her from an enormous fire-breathing dragon named Dragon in exchange for Shrek\'s swamp being vacated. The Dragon turns out to be female, and after a minute or two falls in love with Donkey.
    
    Donkey, Shrek, and Fiona escape, and Dragon chases them. Once Shrek and Donkey rescue Fiona, they take her back to Lord Farquaad. Along the way, Shrek begins to fall in love with Fiona. Donkey finds out from Fiona that she is cursed and turns into an ogre at night. The only way the curse can be broken is by true love\'s first kiss. Fiona and Farquaad have a marriage ceremony, but they are interrupted by Shrek, who tells Fiona he loves her.
    
    Donkey and Dragon enter, and Dragon eats Farquaad. Shrek and Fiona kiss and Fiona is permanently turned into an ogre. Shrek gets his swamp back, and the two marry there. After a karaoke party, the newlyweds set off on their honeymoon. ');

    // var_dump($movie1);
    // var_dump($movie2);
    // var_dump($movie3);
    // var_dump($movie4);

    // stampo countId che è una proprietà statica di class Movie
    // echo Movie::getId();

    // richiamo una volta sola l'array movie_list
    require_once __DIR__ . '/models/movie_list.php';
} catch (Exception $error) {
    $error = $error->getMessage();
}




?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie php</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="text-center">
        <h1 class="fw-semibold py-5">PHP Movies</h1>
    </header>
    <main>
        <div class="conteiner p-5">
            <div class="content">
                <ul>
                    <!-- if error, i : al posto delle graffe {} -->
                    <?php if ($error) : ?>
                        <div>Errore durante la creazione di movie: " <?php echo $error ?>"</div>
                    <?php else : ?>
                        <!-- ciclo foreach itero per tutta la lungheza dell'array movie_list -->
                        <?php foreach ($movie_list as $movie) : ?>
                            <li>
                                Titolo: <span class="fw-bold"><?php echo $movie->getTitle(); ?></span>
                            </li>
                            <!-- inserisco actors separati da virgola con implode e ciclo if -->
                            <li> Cast:
                                <?php
                                //   metodo ??, se a sinistra è null allora mostro quello a destra quindi []
                                if (($movie->getCast()?->getActors() ?? [])) : ?>
                                    <!-- metodo implode per stampare actors separati da virgola -->
                                    <!-- aggiungo metodo statico toUpperCase -->
                                    <span><?php echo UpperCase::toUpperCase(implode(', ', $movie->getCast()->getActors()));  ?></span>
                                <?php else : ?>
                                    N/A.
                                <?php endif; ?>
                            </li>
                            <li> Genere:
                                <?php
                                //   metodo ??, se a sinistra è null allora mostro quello a destra quindi []
                                if (($movie->getGenre()?->getGenres() ?? [])) : ?>
                                    <!-- metodo implode per stampare generi separati da virgola -->
                                    <!-- aggiungo metodo statico toUpperCase -->
                                    <span><?php echo UpperCase::toUpperCase(implode(', ', $movie->getGenre()->getGenres()));  ?></span>
                                <?php else : ?>
                                    N/A.
                                <?php endif; ?>
                            </li>
                            <li>
                                <p>Voto: <?php echo $movie->getVote(); ?></p>
                            </li>
                            <li>
                                <p>Trama: <?php echo $movie->getPlot(); ?></p>
                            </li>
                            <hr>
                        <?php endforeach ?>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>