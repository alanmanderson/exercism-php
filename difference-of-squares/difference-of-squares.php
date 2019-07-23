<?php

function squareOfSum($n) {
    $sum = 0;
    for ($i=1; $i<=$n; $i++){
        $sum += $i;
    }
    return pow($sum, 2);
}

function sumOfSquares($n) {
    $sum = 0;
    for ($i=1; $i<=$n;$i++){
        $sum += pow($i, 2);
    }
    return $sum;
}

function difference($n) {
    return squareOfSum($n) - sumOfSquares($n);
}
