<?php

namespace App\core\generics;

use App\core\generics\Identity;


class PropertiesEntity
{
    public string $properties;
}


abstract class Entity
{
    private Identity $id;
    protected PropertiesEntity $properties;


    public function __construct(PropertiesEntity $props, ?Identity $id = null)
    {
        $this->id = $id ?? new Identity();
        $this->properties = $props;
    }

    public function getIdEntity(): Identity
    {
        return $this->id;
    }

    public function getPropertiesEntity(): PropertiesEntity
    {
        return $this->properties;
    }
}
