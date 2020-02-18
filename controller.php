<?php
    include_once "vendor/autoload.php";
    
    use Moovin\Job\Backend\Model\Account as Account;

    $accounte = new Account();
    $transferenceAccount = new Account();

    use Moovin\Job\Backend\Model\CashDesk as CashDesk;
    $cashDesk = new CashDesk();
    $saque = 200;
    echo $transferenceAccount->balance = $transferenceAccount->balance + $cashDesk->Transferencia($withdraw);

    echo "<br>" . $account->balance;
    echo "<br>" . $transferenceAccount->balance;