<?php
namespace PHPUnitTutorial;

class User {
    private $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function talk() {
        //-return "Hello World!"; // Test Fails 
        return "Hello world!";
    }
}
