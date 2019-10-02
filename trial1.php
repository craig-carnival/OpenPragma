<?php
$value = 4;
try {
    if ($value <= 0) {
        throw new Exception("Fuck");
    } else {
        for ($i = 1; $i <= $value; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo 2 * ($j) - 1;
            }
            echo "<br>";
        }
        for ($i = $value - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo 2 * ($j) - 1;
            }
            echo "<br>";
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
