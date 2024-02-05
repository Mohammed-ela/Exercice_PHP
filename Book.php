<?php

// class Book {
//     private $author;
//     private $title;
//     private $pages;
//     public $isCheckedOut = false;
//     private $ratings = [];

//     public function __construct($title, $author, $pages) {
//         $this->title = $title;
//         $this->author = $author;
//         $this->pages = $pages;
//     }

//     // Getters and Setters
//     public function getAuthor() {
//         return $this->author;
//     }

//     public function setAuthor($author) {
//         $this->author = $author;
//     }

//     public function getTitle() {
//         return $this->title;
//     }

//     public function setTitle($title) {
//         $this->title = $title;
//     }

//     public function getPages() {
//         return $this->pages;
//     }

//     public function setPages($pages) {
//         $this->pages = $pages;
//     }

//     // Other methods
//     public function getAverageRating() {
//         return count($this->ratings) > 0 ? array_sum($this->ratings) / count($this->ratings) : 0;
//     }

//     public function toggleCheckOutStatus() {
//         $this->isCheckedOut = !$this->isCheckedOut;
//     }

//     public function addRating($rating) {
//         $this->ratings[] = $rating;
//     }
// }


require_once 'Media.php';

class Book extends Media {
    private $author;
    private $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title);
        $this->author = $author;
        $this->pages = $pages;
    }


    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getPages() {
        return $this->pages;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }

}
?>