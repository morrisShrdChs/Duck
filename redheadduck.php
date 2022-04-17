<?php
require_once 'duck.php';
require_once 'flynoway.php';
require_once 'quack.php';

class RedHeadDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quacke();
    }
    public function display() {
        echo 'Я нырок.<br>';
    }
}
?>