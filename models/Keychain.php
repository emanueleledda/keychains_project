<?php

namespace App;
class keychain
{
    private $name;
    private $price;
    private $dimension;
    private $image;

    public function __construct($name, $price, $dimension, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->dimension = $dimension;
        $this->image = $image;
    }
}