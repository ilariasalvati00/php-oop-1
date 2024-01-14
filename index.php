<?php

//importo le definizioni delle classi di oggetto
require __DIR__ . "/Models/movie.php";

$titanic = new Movie("Titanic", "Drammatico", "1997", "210min", "James Cameron");
$chicago = new Movie("Chicago", "Musical", "2002", "113min", "Rob Marshall");

//var_dump($titanic);

//echo $titanic->getMovieInfo();
//echo $chicago->getMovieInfo();

echo "<h1>" . $titanic->titolo . "</h1>";
echo "<ul><li>Genere: " . $titanic->genere . "</li>";
echo "<li>Anno: " .  $titanic->anno . "</li>";
echo "<li>Durata: " .  $titanic->durata . "</li>";
echo "<li>Regista: " .  $titanic->regista . "</li></ul>";

echo $titanic->getMovieInfoHTML();

echo $chicago->getMovieInfoHTML();