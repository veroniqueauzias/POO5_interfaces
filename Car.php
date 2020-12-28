<?php
require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    /**
     * @var bool
     */
    private $light;

    const ALLOWED_ENERGIES = [
      'fuel',
      'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var boolean
     */

    private $hasParkBrake = true;

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        if($this->hasParkBrake == true) {
            throw new Exception("Tu as laissé le frein à main");
        }
        return 'Start!' . '<br>';
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy)
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function switchOn()
    {
        return $this->light = true;
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