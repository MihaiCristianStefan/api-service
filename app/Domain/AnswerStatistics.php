<?php

namespace App\Domain;

class AnswersStatistics
{
    public $A;
    public $B;
    public $C;
    public $D;
    public $total;

    function __construct($A, $B, $C, $D, $total)
    {
        $this->A = $A;
        $this->B = $B;
        $this->C = $C;
        $this->D = $D;
        $this->total = $total;
    }
}
