<?php

use Ramsey\Uuid\Uuid;

class Identity
{
    private string $value;

    public function __construct(?string $value = null)
    {
        $this->value = $value ?? Uuid::uuid4()->toString();
    }

    public function getValueId(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }
}
