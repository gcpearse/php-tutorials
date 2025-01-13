<?php

declare(strict_types=1);

class SavingsAccount extends Account
{
    private float $interestRate;

    public function __construct(
        string   $accountNumber,
        float    $balance,
        Customer $customer,
        float    $interestRate
    )
    {
        parent::__construct(
            $accountNumber,
            $balance,
            $customer
        );

        $this->interestRate = $interestRate;
    }

    public function applyInterest(): void
    {
        $this->deposit($this->balance * $this->interestRate);
    }
}
