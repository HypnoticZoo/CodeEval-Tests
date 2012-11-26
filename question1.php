<?php

$inf = fopen($argv[1], "r");
while (! feof($inf)) {
    $line = fgets($inf);
    $line = explode(',', $line);
    if (count($line) == 2) {
        $firstS = trim($line[0]);
        $secondS = trim($line[1]);
        $firstSlast = substr($firstS, -strlen($secondS));

        if ($firstSlast == $secondS) {
            print("1\n");
        }else{
            print("0\n");
        }
    }
}
fclose($inf);
?>