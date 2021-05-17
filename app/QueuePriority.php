<?php

include_once "app/Patient.php";

class QueuePriority
{
    public array $patients;

    public function __construct()
    {
        $this->patients = [];
    }

    public function enqueue($data)
    {
        $this->patients[$data->name] = $data->code;
        asort($this->patients);
        return $this;

//        if (!is_numeric($code)) {
//            throw new Exception('Numeric priority value expected');
//        }
//        isset($this->patients[$code]) || $this->patients[$code] = [];
//        array_push($this->patients[$code], $name);
//        ksort($this->patients);
//        return $this;
    }

    public function dequeue()
    {
//       return $getPriority = array_shift($this->patients);
        array_shift($this->patients);
//        var_dump($this->patients);
        return key($this->patients);

    }

    public function count(): int
    {
        return count($this->patients);
    }

    public function __toString(): string
    {
        return $this->count();
    }
}