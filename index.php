<?php

require_once 'Book.php';
require_once 'Movie.php';
require_once 'Album.php';
require_once 'Artist.php';
require_once 'Song.php';

// // Exemple avec la classe Book
// $grey = new Book('Cinquante nuances de Grey', 'Anastasia Steele', 580);
// $grey->toggleCheckOutStatus();
// echo $grey->isCheckedOut; // true
// $grey->addRating(4);
// $grey->addRating(5);
// $grey->addRating(5);
// echo $grey->getAverageRating(); // 4.6

// // Exemple avec la classe Movie
// $avengersEndgame = new Movie('Avengers: Endgame', 'Marvel Studios', 180);
// $avengersEndgame->toggleCheckOutStatus();
// echo $avengersEndgame->isCheckedOut; // true
// $avengersEndgame->addRating(4);
// $avengersEndgame->addRating(5);
// $avengersEndgame->addRating(5);
// echo $avengersEndgame->getAverageRating(); // 4.6

// // Exemple avec la classe Artist et Song pour améliorer les albums
// $auDD = new Song('Au dd', 'PNL', 180);
// $shenmue = new Song('Shenmue', 'PNL', 196);
// $pnlArtist = new Artist('PNL');
// $pnlAlbum = new Album($pnlArtist, '2 frères', [$auDD, $shenmue]);
// $pnlAlbum->toggleCheckOutStatus();


// Exemple avec la classe Book
$grey = new Book('Cinquante nuances de Grey', 'Anastasia Steele', 580);
$grey->toggleCheckOutStatus();
echo "Book Test - isCheckedOut: " . $grey->isCheckedOut . "\n"; // true
$grey->addRating(4);
$grey->addRating(5);
$grey->addRating(5);
echo "Book Test - Average Rating: " . $grey->getAverageRating() . "\n"; // 4.6
echo "L'auteur du livre est " .$grey->getAuthor();
echo "Le titre du livre est " .$grey->getTitle();
echo "Disponibilité : " .$grey->toggleCheckOutStatus();


// Exemple avec la classe Movie
$avengersEndgame = new Movie('Avengers: Endgame', 'Marvel Studios', 180);
$avengersEndgame->toggleCheckOutStatus();
echo "Movie Test - isCheckedOut: " . $avengersEndgame->isCheckedOut . "\n"; // true
$avengersEndgame->addRating(4);
$avengersEndgame->addRating(5);
$avengersEndgame->addRating(5);
echo "Movie Test - Average Rating: " . $avengersEndgame->getAverageRating() . "\n"; // 4.6


// Exemple avec la classe Artist et Song pour améliorer les albums
$auDD = new Song('Au dd', 'PNL', 180);
$shenmue = new Song('Shenmue', 'PNL', 196);
$pnlArtist = new Artist('PNL');
$pnlAlbum = new Album($pnlArtist, '2 frères', [$auDD, $shenmue]);
$pnlAlbum->toggleCheckOutStatus();
echo "Album Test - isCheckedOut: " . $pnlAlbum->isCheckedOut . "\n"; // true
$pnlAlbum->addRating(3);
$pnlAlbum->addRating(4);
$pnlAlbum->addRating(5);
echo "Album Test - Average Rating: " . $pnlAlbum->getAverageRating() . "\n"; // 4