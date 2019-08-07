<?php

class Series {

    private $series;

    public function __construct($series){
        if (!is_numeric($series) && !empty($series)){
            throw new InvalidArgumentException('Series must be numeric');
        }
        $this->series = $series;
    }

    public function largestProduct(int $length) : int{
        if ($length > strlen($this->series) || $length < 0){
            throw new InvalidArgumentException("Invalid string length");
        }
        $largestProduct = 0;
        for ($i=0; $i<=strlen($this->series)-$length; $i++){
            $curProduct = $this->getSeriesProduct(substr($this->series, $i, $length));
            if ($curProduct > $largestProduct){
                $largestProduct = $curProduct;
            }
        }
        return $largestProduct;
    }

    public function getSeriesProduct(string $series) : int {
        $product = 1;
        for ($i=0; $i<strlen($series); $i++){
            $product *= (int) $series[$i];
        }
        return $product;
    }

}
