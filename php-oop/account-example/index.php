<?php

require 'account.php';
require 'savings-account.php';

$customer = new Customer(
    'John',
    'Smith',
);

$account = new Account(
    '08760432',
    0,
    $customer,
);

$account_number = $account->getAccountNumber();
echo "Account number: $account_number\n";

$account
    ->deposit(10.25)
    ->deposit(5.25)
    ->withdraw(10.00)
    ->withdraw(5.00);

echo $account;

$account->setBalance(0);
$balance = number_format($account->getBalance(), 2);
echo "Balance: £$balance\n";

echo $account;

$savings_account = new SavingsAccount(
    '08760321',
    0,
    $customer,
    0.045,
);

$savings_account
    ->deposit(100.00)
    ->applyInterest();

echo $savings_account;
