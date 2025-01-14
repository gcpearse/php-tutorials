<?php

declare(strict_types=1);

require 'customer.php';

class Account
{
    public function __construct(
        private readonly string   $accountNumber,
        protected float           $balance,
        private readonly Customer $customer,
    )
    {
        if (!preg_match('/^\d{8}$/', $this->accountNumber)) {
            throw new InvalidArgumentException('Invalid account number');
        }
        if ($this->balance < 0) {
            throw new InvalidArgumentException('Invalid balance');
        }
    }

    public function __toString(): string
    {
        $balance = number_format($this->balance, 2);
        $firstName = $this->customer->firstName;
        $lastName = $this->customer->lastName;

        return "Account $this->accountNumber belongs to $firstName $lastName and has a balance of £$balance.\n";
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        if ($balance >= 0) {
            $this->balance = $balance;
        }
    }

    public function deposit(float $amount): static
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }

        return $this;
    }

    public function withdraw(float $amount): static
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        }

        return $this;
    }
}
