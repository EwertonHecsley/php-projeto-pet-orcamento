<?php

namespace App\infra\repositories;

use App\core\domain\repository\OrcamentoRepositoryInterface;
use App\core\domain\entity\Orcamento;

class OrcamentoRepositoryMemory implements OrcamentoRepositoryInterface
{
    private array $db = [];

    public function salvar(Orcamento $orcamento): void
    {
        $this->db[(string)$orcamento->getIdEntity()] = $orcamento;
    }

    public function buscarPorId(string $id): ?Orcamento
    {
        return $this->db[$id] ?? null;
    }
}
