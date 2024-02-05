<?php

require_once 'Media.php';

class Movie extends Media {
    private $director;
    private $runTime;

    public function __construct($title, $director, $runTime) {
        parent::__construct($title);
        $this->director = $director;
        $this->runTime = $runTime;
    }

    // Getters and Setters
    public function getDirector() {
        return $this->director;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function getRunTime() {
        return $this->runTime;
    }

    public function setRunTime($runTime) {
        $this->runTime = $runTime;
    }

}

?>
