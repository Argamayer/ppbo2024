<?php

class Publisher {
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}
