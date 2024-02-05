<?php

require_once 'Media.php';

class Album extends Media {
    private $artist;
    private $songs = [];

    public function __construct($artist, $title, $songs) {
        parent::__construct($title);
        $this->artist = $artist;
        $this->songs = $songs;
    }

    // Getters and Setters
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Other methods
    public function getSongs() {
        return $this->songs;
    }

    public function setSongs($songs) {
        $this->songs = $songs;
    }
}

?>
