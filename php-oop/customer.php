<?php

declare(strict_types=1);

class Customer
{
    public function __construct(
        public string $firstName {
            get {
                return $this->firstName;
            }
            set {
                $this->firstName = trim($value);
            }
        },
        public string $lastName {
            get {
                return $this->lastName;
            }
            set {
                $this->lastName = trim($value);
            }
        },
    )
    {
        $this->firstName = trim($firstName);
        $this->lastName = trim($lastName);
    }
}
