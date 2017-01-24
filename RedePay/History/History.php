<?php
namespace RedePay\History;

class History {
    use \RedePay\Utils\Fillable;

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
