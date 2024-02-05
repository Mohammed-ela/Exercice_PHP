<?php

class Media {
    protected $title;
    public $isCheckedOut = false;
    protected $ratings = [];

    public function __construct($title) {
        $this->title = $title;
    }

    // Getters and Setters
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Other methods
    public function getAverageRating() {
        return count($this->ratings) > 0 ? array_sum($this->ratings) / count($this->ratings) : 0;
    }

    public function toggleCheckOutStatus() {
        $this->isCheckedOut = !$this->isCheckedOut;
    }

    public function addRating($rating) {
        $this->ratings[] = $rating;
    }
}

?>
