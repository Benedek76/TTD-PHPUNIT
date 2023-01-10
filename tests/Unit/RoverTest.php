<?php

use PHPUnit\Framework\TestCase;

class MarsRover{

    public $initialPosition = '0:0:N';

    public function execute() {
        return "0:1:N";
    }
}

class Rovertest extends TestCase{

    public function testInitialPosition() {

    $rover = new MarsRover();

        $this->assertEquals("0:0:N", $rover->initialPosition);

    }

    public function testMoveAheadOnPosition() {

    $rover = new MarsRover();

        $this->assertEquals("0:1:N", $rover->execute("M"));
    }
}
