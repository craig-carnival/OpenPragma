<?php
$isInverse = $_REQUEST["inverse"];
$choice = $_REQUEST["currency"];
$currency = $_REQUEST["paisa"];
settype($choice, "integer");
//echo $choice."<br>".$isInverse;
echo "Amount = ";
if ($isInverse == "no") {
    switch ($choice) {
        case 1 :
            echo 0.014068 * $currency;
            break;
        case 2 :
            echo 0.012346 * $currency;
            break;
        case 3 :
            echo 0.010844 * $currency;
            break;
        case 4 :
            echo 0.019549 * $currency;
            break;
        case 5 :
            echo 0.018675 * $currency;
            break;
        case 6 :
            echo 0.019079 * $currency;
            break;
        case 7:
            echo 0.013981 * $currency;
            break;
    }
} else {
    switch ($choice) {
        case 1 :
            echo 71 * $currency;
            break;
        case 2 :
            echo 80 * $currency;
            break;
        case 3 :
            echo 92 * $currency;
            break;
        case 4 :
            echo 51 * $currency;
            break;
        case 5 :
            echo 53 * $currency;
            break;
        case 6 :
            echo 52 * $currency;
            break;
        case 7:
            echo 71.5 * $currency;
            break;
    }
}