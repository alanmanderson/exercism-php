<?php

function toRna($dna) {
    $complements = ['G' => 'C', 'C' => 'G', 'A' => 'U', 'T' => 'A'];
    $rnaComplement = "";
    for ($i=0; $i<strlen($dna); $i++) {
        $rnaComplement .= $complements[$dna[$i]];
    }
    return $rnaComplement;
}
