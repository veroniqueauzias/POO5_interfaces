<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @var bool
     */
    private $light;

    public function switchOn()
    {
        if ($this->currentSpeed > 10){
            return $this->light = true;
        } else {
            return $this->light = false;
        }
    }

    public function switchOff()
    {
        return $this->light = false;
    }

    public function islight() : string
    {
        if ($this->light == true) {
            return 'light is on' . '<br>';
        } else {
            return 'light is off' . '<br>';
        }
    }
}
