<?php
class Conta {
    protected $saldo;
    protected $limiteSaque;
    protected $taxaOperacao;

    public function __construct($saldo, $limiteSaque, $taxaOperacao) {
        $this->saldo = $saldo;
        $this->limiteSaque = $limiteSaque;
        $this->taxaOperacao = $taxaOperacao;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor > $this->saldo || $valor > $this->limiteSaque) {
            return false;
        }

        $this->saldo -= $valor;

        if ($valor > 0) {
            $this->saldo -= $this->taxaOperacao;
        }

        return true;
    }

    public function transferir($contaDestino, $valor) {
        if ($valor > $this->saldo) {
            return false;
        }

        $this->saldo -= $valor;
        $contaDestino->depositar($valor);

        return true;
    }
}

// Aqui você pode realizar seus testes e verificar todas as etapas do teste! 
// Exemplo de uso:

$contaCorrente = new Conta(1000, 600, 2.50);
$contaPoupanca = new Conta(2000, 1000, 0.80);

echo "Saldo conta corrente: " . $contaCorrente->getSaldo() . "\n <br />";
echo "Saldo conta poupança: " . $contaPoupanca->getSaldo() . "\n";

$contaCorrente->depositar(500);
$contaPoupanca->depositar(800);

echo "Saldo conta corrente após depósito: " . $contaCorrente->getSaldo() . "\n <br />";
echo "Saldo conta poupança após depósito: " . $contaPoupanca->getSaldo() . "\n <br />";

if (!$contaCorrente->sacar(600)) {
    echo "Erro: Valor de saque excede o limite da Conta Corrente.\n <br />";
}

if (!$contaPoupanca->sacar(1000)) {
    echo "Erro: Valor de saque excede o limite da Conta Poupança.\n <br />";
}

echo "Saldo conta corrente após saque: " . $contaCorrente->getSaldo() . "\n <br />";
echo "Saldo conta poupança após saque: " . $contaPoupanca->getSaldo() . "\n <br />";

$contaCorrente->transferir($contaPoupanca, 200);
echo "Saldo conta corrente após transferência: " . $contaCorrente->getSaldo() . "\n <br />";
echo "Saldo conta poupança após transferência: " . $contaPoupanca->getSaldo() . "\n <br />";
?>
