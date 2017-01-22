<?php
require_once "RedePay/Utils/Fillable.php";

class History {
    use Fillable;

    private $status;
    private $date;

    public function __construct($data) {
        $this->fill($data);
    }

    public function getStatus() {
        return $this->status;
    }

    public function getDate() {
        return $this->date;
    }
}
