<?php

class Artist {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Getters and Setters
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

?>
