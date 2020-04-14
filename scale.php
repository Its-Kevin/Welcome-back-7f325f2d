<?php
if ($argc  < 4) {
    echo "Too little arguments.";
    die;
}
if ($argc > 4) {
    echo " Too many arguments";
    die;
}
if ($argv[1]  === $argv[2]) {

    echo "in balance";
} else {

    $diff = abs($argv[1] - $argv[2]);
    $extra = explode(",", $argv[3]);
    sort($extra);
    foreach ($extra as $val) {
        if ($argv[1] + $val == $argv[2] || $argv[1] - $val == $argv[2]) {
            echo $val;
            die;
        }
    }


    $x = 0;
    $y = count($extra) - 1;
    while ($x != $y) {
        if ($extra[$x] + $extra[$y] == $diff) {
            echo $extra[$x] . "," . $extra[$y];
            die;
        }

        if ($extra[$x] + $extra[$y] > $diff) {
            $y--;
        }
        if ($extra[$x] + $extra[$y] < $diff) {
            $x++;
        }
    }
    echo "no balance.";
}
