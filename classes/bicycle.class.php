
<?php

class Bicycle {

  public $bikeSpeed = 0;
  public $gearResistance = 0;

  public function __construct($color, $size, $frame, $handlebars, $crank, $seat, $wheels) {
    $this->color = $color;
    $this->size = $size;
    $this->frame = $frame;
    $this->handlebars = $handlebars;
    $this->crank = $crank;
    $this->seat = $seat;
    $this->wheels = $wheels;
    }


  // Brake pressure slows down bike speed

  public function applyBrake($brakePressure) {
    $this->bikeSpeed = $this->bikeSpeed - $brakePressure;
  }



// Adds resistance to speed by changing gears

  public function changeGear($gearNumber) {
      
  if ($gearNumber === 0){
    $this->gearResistance = 0;
  }
    else if ($gearNumber === 1) {
      $this->gearResistance = 1;
    } else if ($gearNumber === 3) {
      $this->gearResistance = 2;
    } else if ($gearNumber === 21) {
      $this->gearResistance = 3;
    } else if ($gearNumber === 24) {
      $this->gearResistance = 4;
    } else if ($gearNumber === 27) {
      $this->gearResistance = 5;
    } else {
      echo "Please add a valid gear number (1, 3, 21, 24, 27)";
    }
  }


  public function rideBike($pedalSpeed) {

  
  // If the bike is missing critical components, it will not ride

    if ($this->frame !== "true" || $this->handlebars !== "true" || 
        $this->crank !== "true" || $this->seat !== "true" || $this->wheels <= 0){
      echo "Your bike is missing a critical component";
      return;
    }


    // Sets bike speed based on pedal speed and gear resistance
    
    if ($pedalSpeed === "slow") {
      $this->bikeSpeed = 10 - $this->gearResistance;
      echo "You are going " . $this->bikeSpeed . " MPH";
    } else if ($pedalSpeed === "medium") {
      $this->bikeSpeed = 15 - $this->gearResistance;
      echo "You are going " . $this->bikeSpeed . " MPH";
    } else if ($pedalSpeed === "fast") {
        $this->bikeSpeed = 20 - $this->gearResistance;
        echo "You are going " . $this->bikeSpeed . " MPH";
    }
  }
  
  }

