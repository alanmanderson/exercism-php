<?php

function isValid(string $number){
    $cleanedNumber = str_replace(' ', '', $number);
    if (strlen($cleanedNumber) <= 1 || !is_numeric($cleanedNumber)){
        return false;
    }
    $newNumber = '';
    for ($i=strlen($cleanedNumber)-2; $i>=0; $i-=2){
        $curDigit = (int) $cleanedNumber[$i] * 2;
        if ($curDigit > 9) {
            $curDigit -= 9;
        }
        $cleanedNumber[$i] = $curDigit;
    }
    $sum = 0;
    for ($i=0; $i<strlen($cleanedNumber); $i++){
        $sum += (int) $cleanedNumber[$i];
    }
    return $sum % 10 == 0;
}
