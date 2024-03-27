<?php

// Exercício 1 - Índice de Massa Corporal (IMC)
function calcularIMC() {
    echo "Digite sua altura em metros: ";
    $altura = trim(fgets(STDIN));
    echo "Digite seu peso em quilogramas: ";
    $peso = trim(fgets(STDIN));

    $imc = $peso / ($altura * $altura);

    echo "Seu IMC é: " . $imc . "\n";

    if ($imc < 18.5) {
        echo "Abaixo do peso\n";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        echo "Peso normal\n";
    } elseif ($imc >= 25 && $imc <= 29.9) {
        echo "Sobrepeso\n";
    } else {
        echo "Obeso\n";
    }
}

// Exercício 2 - Verificação de Pagamento
function verificarPagamento() {
    echo "Você tem saldo na conta? (sim/nao): ";
    $temSaldo = trim(fgets(STDIN)) === 'sim';

    if ($temSaldo) {
        echo "Você deseja fazer uma compra? (sim/nao): ";
        $fazerCompra = trim(fgets(STDIN)) === 'sim';

        if ($fazerCompra) {
            echo "Digite o valor da compra: ";
            $valorCompra = trim(fgets(STDIN));

            // Simulando saldo na conta para o exemplo
            $saldoConta = 100.00;

            if ($valorCompra <= $saldoConta) {
                echo "Transação concluída com sucesso!\n";
            } else {
                echo "Saldo insuficiente!\n";
            }
        }
    }
}

// Exercício 3 - Conversor de Temperatura
function converterTemperatura() {
    echo "Digite a temperatura em Celsius: ";
    $celsius = trim(fgets(STDIN));
    $fahrenheit = ($celsius * 9/5) + 32;

    echo "{$celsius}C é igual a {$fahrenheit}F\n";
}

// Exercício 4 - Verificação de Acesso
function verificarAcesso() {
    echo "Você é maior de idade? (sim/nao): ";
    $maiorIdade = trim(fgets(STDIN)) === 'sim';

    $acessoPermitido = $maiorIdade;

    if ($maiorIdade) {
        echo "Você possui autorização dos pais? (sim/nao): ";
        $autorizacaoPais = trim(fgets(STDIN)) === 'sim';
        $acessoPermitido = $autorizacaoPais;
    }

    if ($acessoPermitido) {
        echo "Acesso permitido ao conteúdo restrito.\n";
    } else {
        echo "Acesso negado.\n";
    }
}

// Exercício 5 - Verificação de Números Primos
function verificarPrimo() {
    echo "Digite um número inteiro: ";
    $numero = trim(fgets(STDIN));
    $ehPrimo = true;

    if ($numero <= 1) {
        $ehPrimo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $ehPrimo = false;
                break;
            }
        }
    }

    if ($ehPrimo) {
        echo "O número $numero é primo.\n";
    } else {
        echo "O número $numero não é primo.\n";
    }
}

// Aqui você pode chamar as funções individualmente para testar cada exercício.
// Por exemplo:
// calcularIMC();
// verificarPagamento();
// converterTemperatura();
// verificarAcesso();
// verificarPrimo();

?>
