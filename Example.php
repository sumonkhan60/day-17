<?php
require_once './Pencilbox.php';

class Example extends Pencilbox
{
    public $mobile = '01821444450';
    protected $email = 'softtech@domain.com';
    private $location = 'Karwanbazar';

    public function one($name) {
        echo $name;
    }

    protected function two() {
        echo 'In two';
    }

    private function three() {
        echo 'In three';
    }
}

