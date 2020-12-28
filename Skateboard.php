<?php
require_once 'Vehicle.php';
class skateboard extends Vehicle
{
    public function __construct(string $color, int $nbSeats, int $nbWheels)
    {
        parent::__construct($color, $nbSeats);
        $this->nbWheels = $nbWheels;
    }

    public function switchOn()
    {
        return 'I have no light take your own one, I don\'t need to switch off';
    }
}