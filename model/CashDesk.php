<?php
    namespace Moovin\Job\Backend\Model;

    use Moovin\Job\Backend\Model\Account as Account;

    class CashDesk
    {
        
        public function __construct()
        {
            
        }

        public function withdraw($accountNumber, $value)
        {
            if (!is_numeric($value) || $value < 0) {
                return "Valor incorreto!";
            }

            if ($accountNumber->accountType == "Corrente" || $accountNumber->accountType == "Poupança") {
                if ($accountNumber->accountType == "Corrente") {
                    if ($value > 600.00) {
                        return "Limite de saque por transação é de B$ 600,00";
                    }
                    $tax = 2.50;
                } else {
                    if ($value > 1000.00) {
                        return "Limite de saque por transação é de B$ 1.000,00";
                    }
                    $tax = 0.80;
                }
            } else {
                return "Tipo de conta inválida!";
            }            

            $withdraw = $value + $tax;
            if($withdraw > $accountNumber->balance) {
                $avaliableWithdraw = $accountNumber->balance - $tax;
                return "Você não tem saldo suficiente para realizar o saque, valor disponível para saque é de B$ " . $avaliableWithdraw;
            }

            $accountNumber->balance = $accountNumber->balance - ($value + $tax);
            return 'Novo saldo:' . $accountNumber->balance;
        }

        public function deposit($accountNumber, $value)
        {
            if (!is_numeric($value)|| $value < 0) {
                return "Valor incorreto!";
            }
            $accountNumber->balance = $accountNumber->balance + $value; 
            return $accountNumber->balance;
        }

        public function transference($accountNumber, $value, $accountNumberTransference)
        {
            if (!is_numeric($value)) {
                return "Valor incorreto!";
            }

            if($value > $accountNumber->balance) {
                return "Você não tem saldo suficiente para fazer a transferência desse valor, valor disponível para transferência é de B$ " . $account->balance;
            }

            $accountNumber->balance = $accountNumber->balance - $value;
            $accountNumberTransference->balance = $accountNumberTransference->balance + $value;
            return "Transferência realizada com sucesso!";
        }
    }