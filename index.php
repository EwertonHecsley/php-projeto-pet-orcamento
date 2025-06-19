<?php

require_once 'vendor/autoload.php';

use App\infra\repository\OrcamentoRepositoryMemory;
use App\core\application\usecases\SolicitarOrcamentoUseCase;

// Simulando uma requisição vinda de fora
$clienteId = 'cli1';
$petshopId = 'pet1';
$servicoId = 'banho';

// Injeção de dependência do repositório
$repo = new OrcamentoRepositoryMemory();

// Casos de uso com portas de saída
$useCase = new SolicitarOrcamentoUseCase($repo);

// Executa a ação
$id = $useCase->execute($clienteId, $petshopId, $servicoId);

// Simula resposta da aplicação (terminal ou API)
echo "Orçamento criado com ID: {$id}" . PHP_EOL;
