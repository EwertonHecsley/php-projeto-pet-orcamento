<?php

namespace App\core\domain\entity;

use App\core\generics\PropertiesEntity;
use App\core\generics\Entity;
use App\core\generics\Identity;

class OrcamentoProps extends PropertiesEntity
{
    public string $clienteId;
    public string $petshopId;
    public string $servicoId;
    public string $status;

    public function __construct(string $clienteId, string $petshopId, string $servicoId)
    {
        $this->clienteId = $clienteId;
        $this->petshopId = $petshopId;
        $this->servicoId = $servicoId;
        $this->status = 'pendente';
    }
}

class Orcamento extends Entity
{
    public function __construct(OrcamentoProps $props, ?Identity $id = null)
    {
        parent::__construct($props, $id);
    }

    public static function create(string $clienteId, string $petshopId, string $servicoId): self
    {
        $props = new OrcamentoProps($clienteId, $petshopId, $servicoId);
        return new self($props);
    }

    public function getStatus(): string
    {
        /** @var OrcamentoProps $props */
        $props = $this->getPropertiesEntity();
        return $props->status;
    }

    public function aceitar(): void
    {
        /** @var OrcamentoProps $props */
        $props = $this->getPropertiesEntity();
        $props->status = 'aceito';
    }

    public function cancelar(): void
    {
        /** @var OrcamentoProps $props */
        $props = $this->getPropertiesEntity();
        $props->status = 'cancelado';
    }
}
