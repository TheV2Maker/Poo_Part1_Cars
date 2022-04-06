<?php

class Car
{

    private int $wheel = 4;
    private int $speed = 0;
    private string $color;
    private int $seatNumber = 4;
    private string $energyType;
    private int $energyLevel;

    //Definition of color, seat and energy type.
    public function __construct($color, $seatNumber, $energyType)
    {
        $this->color=$color;
        $this->seatNumber=$seatNumber;
        $this->energyType=$energyType;

    }

    public function setSpeed ($speed)
    {
   if($speed < 0)
        {
        $speed = 0;
        }
    $this->speed=$speed;
    }

    public function getSpeed ()
    {
        return $this->speed;
    }

    public function startUp()
    {
        return "Powaaa !!";
    }

    public function brake()
    {
        $this->setSpeed($this->speed -150);
        return $this->speed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getWheel()
    {
        return $this->wheel;
    }

    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    public function getEnergyType()
    {
        return $this->energyType;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }



}

