<?php

class Car {

    private int $nbWheels = 4;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

public function __construct(string $color, int $nbSeats, string $energy) {

        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    
public function forward(): string
{
    $this->currentSpeed = 50;
    return "Zé barti letzgo <br>";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Yahou! <br>";
   }
   $sentence .= "Zé fini, prochain tour à 2€ !";
   return $sentence;
}

public function start()
{
    $this->currentSpeed = 0;
    return 'Vrouuuuuum !';
}

public function getNbWheels(): int
{
    return $this->nbWheels;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function getColor(): string 
{
    return $this->color;
}

public function getNbSeats(): int 
{
    return $this->nbSeats;
}

public function getEnergy(): string 
{
    return $this->energy;
}

public function getEnergyLever(): int
{
    return $this->energyLevel;
}

}
