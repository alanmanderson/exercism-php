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
    $sumOfSquares = sumOfSquares($n);
    $squareOfSum = squareOfSum($n);
    return $squareOfSum - $sumOfSquares;
}
