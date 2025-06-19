<?php

namespace App\core\application\usecases;

use App\core\domain\repository\OrcamentoRepositoryInterface;
use App\core\domain\entity\Orcamento;

class SolicitarOrcamentoUseCase
{
    public function __construct(private OrcamentoRepositoryInterface $repo) {}

    public function execute(string $clienteId, string $petshopId, string $servicoId): string
    {
        $orcamento = Orcamento::create($clienteId, $petshopId, $servicoId);
        $this->repo->salvar($orcamento);
        return (string) $orcamento->getIdEntity();
    }
}
