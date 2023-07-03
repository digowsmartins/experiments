<?php

function findRoots($a, $b, $c) {
    $roots = array();

    $d = $b * $b - 4 * $a * $c;

    if ($d > 0) {
        $roots[] = (-$b + sqrt($d)) / (2 * $a);
        $roots[] = (-$b - sqrt($d)) / (2 * $a);
    } elseif ($d == 0) {
        $roots[] = -$b / (2 * $a);
    } else {
        $realPart = -$b / (2 * $a);
        $imaginaryPart = sqrt(-$d) / (2 * $a);
        $roots[] = $realPart . " + " . $imaginaryPart . "i";
        $roots[] = $realPart . " - " . $imaginaryPart . "i";
    }

    return $roots;
}


print_r(findRoots(2, 10, 8));


?>