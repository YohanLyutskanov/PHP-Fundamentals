<?php

class Fibonacci
{
    private $start;
    private $end;


    public function __construct($start, $end)
    {
        $this->setStart($start);
        $this->setEnd($end);
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }

    public function fibonacciNumbers()
    {
        $arr = [0, 1];
        $x = 0;
        $y = 1;
        for ($i = 0; $i < $this->getEnd(); $i++) {
            $z = $x + $y;
            $arr[] = $z;
            $x = $y;
            $y = $z;
        }
        return $arr;
    }

    public function getNumbersInRange()
    {
        $range = $this->fibonacciNumbers();
        for ($i = $this->getStart(); $i < $this->getEnd(); $i++) {
            if ($i != $this->getEnd() - 1) {
                echo $range[$i] . ", ";
            } else {
                echo $range[$i];

            }
        }
    }
}

$start = trim(fgets(STDIN));
$end = trim(fgets(STDIN));
$fibonacci = new Fibonacci($start, $end);
$fibonacci->getNumbersInRange();