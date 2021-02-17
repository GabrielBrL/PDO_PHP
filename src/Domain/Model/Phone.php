<?php

namespace Alura\Pdo\Domain\Model;

class Phone
{

    private ?int $id;
    private string $number;
    private string $areaCode;

    public function __construct(?int $id, string $areaCode, string $number)
    {
        $this->id = $id;
        $this->areaCode = $areaCode;
        $this->number = $number;
    }

    public function formattedPhone(): string
    {
        return "($this->areaCode) $this->number";
    }
}