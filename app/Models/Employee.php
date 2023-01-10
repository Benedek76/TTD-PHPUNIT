<?php

namespace App\Models;

class Employee {

    protected $employee;

    // Function to set Employee name.
    public function setName($name) {

        $this->employee = $name;
    }

    // Function to get Employee name.
    public function getName() {

        return $this->employee;
    }

}