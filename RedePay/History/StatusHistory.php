<?php
namespace RedePay\History;

class StatusHistory {
    use \RedePay\Utils\Fillable;

    private $status;
    private $date;
    private $responsible;
    private $reason;

    public function __construct($data) {
        $this->fill($data);
    }

    public function getStatus() {
        return $this->status;
    }

    public function getDate() {
        return $this->date;
    }

    public function getResponsible() {
        return $this->responsible;
    }

    public function getReason() {
        return $this->reason;
    }
}
