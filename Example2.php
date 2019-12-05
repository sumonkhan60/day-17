<?php

class Example2{
    public $name = 'Sumon Khan';
    protected $city = 'Dhaka';
    private $country = 'Bangladesh';
    public $value;

    public function __construct()
    {
//        echo 'In construction';
//        $this->value = $data;
    }

    public function addition() {
        echo 'In addition';
//        echo $this->value;
    }

    public function subtraction() {
        echo $this->value;
    }

    private function division() {
        echo 'In division';
    }
}

