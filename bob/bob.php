<?php

class Bob {
    public function respondTo(string $comment){
        $comment = trim($comment);
        if (empty($comment)) {
            return "Fine. Be that way!";
        }
        $isShouting = $this->isShouting($comment);
        $isAsking = $this->isAsking($comment);
        if ($isAsking && !$isShouting) {
            return "Sure.";
        }
        if ($isAsking && $isShouting) {
            return "Calm down, I know what I'm doing!";
        }
        if ($isShouting) {
            return 'Whoa, chill out!';
        }
        return "Whatever.";
    }

    private function isShouting(string $comment) {
        return $comment == strtoupper($comment) && $comment != strtolower($comment);
    }

    private function isAsking(string $comment){
        return $comment[strlen($comment) - 1] == '?';
    }
}
