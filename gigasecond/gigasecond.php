<?php

function from(DateTimeImmutable $birth) {
    return $birth->add(new DateInterval('PT1000000000S'));
}

