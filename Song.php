<?php

class Song {
    private $artist;
    private $title;
    private $runtime;

    public function __construct($title, $artist, $runtime) {
        $this->title = $title;
        $this->artist = $artist;
        $this->runtime = $runtime;
    }

    // Getters and Setters
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getRuntime() {
        return $this->runtime;
    }

    public function setRuntime($runtime) {
        $this->runtime = $runtime;
    }
}

?>
