<?php
require_once 'quackbehavior.php';

class Squeak implements QuackBehavior {
    public function quack1() {
        echo 'Резиновые утки пищат<br>';
    }
}

?>