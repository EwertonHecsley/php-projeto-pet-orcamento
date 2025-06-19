<?php

namespace App\core\domain\repository;

use App\core\domain\entity\Orcamento;

interface OrcamentoRepositoryInterface
{
    public function salvar(Orcamento $orcamento): void;

    public function buscarPorId(string $id): ?Orcamento;
}
