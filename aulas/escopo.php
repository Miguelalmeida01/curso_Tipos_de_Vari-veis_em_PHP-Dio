<?php

    $a = 50;

      function soma() {
        global $a;
        $x = 10 + $a;
        return $x;
    }
    echo soma();

?>