<?php



class Patient
{
    public int $code;
    public string $name;

    public function __construct(int $code, string $name)
    {
        $this->code = $code;
        $this->name = $name;
    }
}