<?php
session_start();
$handle = fopen($_SESSION['fileName'], "r");
$writer = fopen("newFile.txt", "w");
while (!feof($handle)) {
    $line = fgets($handle);
    echo "Read line : $line <br>";
    fwrite($writer, $line);
}
fclose($handle);
fclose($writer);