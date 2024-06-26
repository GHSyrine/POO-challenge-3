<?php 
require_once 'HighWay.php';
final class PedestrianWay extends HighWay{
    public function __construct() {
        parent::__construct(1, 10);
        }
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}