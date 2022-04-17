<?php
require_once 'quackbehavior.php';

class MuteQuack implements QuackBehavior {
    function quack1() {
        echo 'Я вообще-то не квакаю<br>';
    }
}

?>