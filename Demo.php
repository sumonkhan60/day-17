<?php

require_once './Example2.php';
class Demo extends Example2
{
    public $age = 22;
    protected $location = 'Farmgate';
    private $mobile = '01821444450';

    public function newOne() {
        echo 'In new one';
        $this->addition();
    }

    protected function newTwo() {
        echo 'In new two';
    }

    private function newThree() {
        echo 'In new three';
    }
}