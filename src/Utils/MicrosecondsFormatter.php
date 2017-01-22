<?php

trait MicrosecondsFormatter {
    public function getDateInMicroseconds(\DateTime $date) {
        return substr($date->format('Uu'), 0, 13);
    }
}
