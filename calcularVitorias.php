<?php

function calcularVitorias(int $vitorias, int $derrotas): array {
    $saldoVitorias = $vitorias - $derrotas;

    $niveis = [
        ['limite' => 10, 'nivel' => 'Ferro'],
        ['limite' => 20, 'nivel' => 'Bronze'],
        ['limite' => 50, 'nivel' => 'Prata'],
        ['limite' => 80, 'nivel' => 'Ouro'],
        ['limite' => 90, 'nivel' => 'Diamante'],
        ['limite' => 100, 'nivel' => 'Lendário']
    ];

    foreach ($niveis as $nivel) {
        if ($saldoVitorias <= $nivel['limite']) {
            return [$saldoVitorias, $nivel['nivel']];
        }
    }

    return [$saldoVitorias, 'Imortal'];
}


[$saldoVitorias, $nivel] = calcularVitorias(110, 10);
echo "Saldo de vitórias: $saldoVitorias, Nível: $nivel";
