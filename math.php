<?php
$nr1 = $_GET["display"];
$buffer = $_GET["buffer"];
$nr2 = substr($buffer,1);
$operator = substr($buffer,0,1);
$result = "";

if (isset($nr2, $nr1, $operator)){

    switch($operator) {
        case '+':
            $result = $nr1 + $nr2;
            break;

        case '-':
            $result = $nr1 - $nr2;
            break;

        case '/':
            $result = $nr1 / $nr2;
            break;

        case '*':
            $result = $nr1 * $nr2;
            break;
    }
            if (is_numeric($result))
        echo $result;
            else
        echo "Error non numeric output, not prepared yet.";

    }
