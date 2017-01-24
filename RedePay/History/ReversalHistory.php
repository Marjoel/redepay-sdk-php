<?php
namespace RedePay\History;

class ReversalHistory {
    use \RedePay\Utils\Fillable;

    private $value;
    private $date;

    public function __construct($data) {
        $this->fill($data);
    }

    public function getValue() {
        return $this->value;
    }

    public function getDate() {
        return $this->date;
    }
}
