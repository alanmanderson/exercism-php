<?php

function isIsogram($input){
    $usedChars = [];
    for ($i=0; $i<=strlen($input); $i++) {
        $cur = strtolower($input[$i]);
        if (ctype_alpha($cur)) {
            if (isset($usedChars[$cur])) {
                echo "HERE:", $cur, "**";
                return false;
            }
            $usedChars[$cur] = true;
        }
    }
    return true;
}
