<?php

class Pencilbox {
public $name = "Pencilbox Training";
protected $city = "Dhaka";
private $country = "Bangladesh";

    public function add() {
        echo 'In add';
    }

    protected function sub() {
        echo 'In sub';
    }

    private function rem() {
        echo 'In rem';
    }
}