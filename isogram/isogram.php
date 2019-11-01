<?php
/*
function isIsogram($test_word){
    preg_match_all('/(\w)(?=.*?\1)/iu', $test_word, $matches);
    
    return empty($matches[0]);
}
*/
function isIsogram($input){
    $usedChars = [];
    for ($i=0; $i<=strlen($input); $i++) {
        $cur = strtolower(mb_substr($input, $i, 1));
        if (isAlpha($cur)) {
            if (isset($usedChars[$cur])) {
                return false;
            }
            $usedChars[$cur] = true;
        }
    }
    return true;
}

function isAlpha($s){
  $reg = "/\w/iu";
  $count = preg_match($reg, $s, $matches);
  return $count > 1;
}

preg_match("/[^\p{L}\s-]/u", 'é', $matches);

print_r($matches);

var_dump(IsAlpha('é'));
