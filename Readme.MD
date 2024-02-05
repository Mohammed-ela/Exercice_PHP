# Devoir Médiathèque PHP

## Enoncé

Félicitations, vous êtes embauché dans la médiathèque d'Harry Potter. Vous constatez que Dumbledore gère mal sa médiathèque en utilisant encore des dossiers pour lister ses ouvrages ! Heureusement, vous connaissez PHP, et vous allez moderniser le système de gestion de la médiathèque. La médiathèque d'Harry Potter gère 3 types de média :

- **Album (Album)**
- **Livres (Book)**
- **Films (Movie)**

Vous allez donc créer 3 classes correspondantes à ces types de médias.

### Book

- **Propriétés:**
  - author (private, string)
  - title (private, string)
  - pages (private, int)
  - isCheckedOut (public, boolean, false par défaut)
  - ratings (private, array, vide par défaut).

- **Getters et setters:** Toutes les propriétés de type private doivent avoir un getter et un setter.

- **Méthodes:**
  - getAverageRating() : récupère la moyenne des notes
  - toggleCheckOutStatus() : change le statut de prêt
  - addRating() : ajoute une note

- **Constructeur:** `__construct($title, $author, $pages)`

### Movie

- **Propriétés:**
  - director (private, string)
  - title (private, string)
  - runTime (private, int) : minutes
  - isCheckedOut (public, boolean, false par défaut)
  - ratings (private, array, vide par défaut)

- **Getters et setters:** Toutes les propriétés de type private doivent avoir un getter et un setter.

- **Méthodes:**
  - getAverageRating() : récupère la moyenne des notes
  - toggleCheckOutStatus() : change le statut de prêt
  - addRating() : ajoute une note

- **Constructeur:** `__construct($title, $director, $runtime)`

### Album

- **Propriétés:**
  - artist (private, string)
  - title (private, string)
  - isCheckedOut (public, boolean, false par défaut)
  - ratings (private, array, vide par défaut)
  - songs (private, array)

- **Getters et setters:** Toutes les propriétés de type private doivent avoir un getter et un setter.

- **Méthodes:**
  - getAverageRating() : récupère la moyenne des notes
  - toggleCheckOutStatus() : change le statut de prêt
  - addRating() : ajoute une note

- **Constructeur:** `__construct($title, $artist, $songs)`

## Remarques

Vous pouvez créer autant de méthodes et propriétés complémentaires que celles demandées.

## 1. Utilisation

Vous devez faire en sorte que vos classes puissent être instanciées et manipulées de la manière suivante :

```php
$grey = new Book('Cinquante nuances de Grey', "Anastasia Steele ... ", 580); 
$grey->toggleCheckOutStatus(); 
echo $grey->isCheckedOut; // true
$grey->addRating(4); 
$grey->addRating(5); 
$grey->addRating(5); 
echo $grey->getAverageRating(); // 4.6

$avengersEndgame = new Movie('Avengers: Endgame', "Marvel Studios", 180); 
$avengersEndgame->toggleCheckOutStatus(); 
echo $avengersEndgame->isCheckedOut; // true
$avengersEndgame->addRating(4); 
$avengersEndgame->addRating(5); 
$avengersEndgame->addRating(5); 
echo $avengersEndgame->getAverageRating(); // 4.6

$pnl = new Album('PNL', '2 frères', ['au dd', 'shenmue']); 
$pnl->toggleCheckOutStatus(); 
echo $pnl->isCheckedOut; // true
$pnl->addRating(3); 
$pnl->addRating(4); 
$pnl->addRating(5); 
echo $pnl->getAverageRating(); // 4
