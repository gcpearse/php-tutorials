<?php

declare(strict_types=1);

enum Gender: string
{
    case MALE = 'male';
    case FEMALE = 'female';
}

class Customer
{
    public function __construct(
        public string           $firstName {
            get {
                return $this->firstName;
            }
            set {
                $this->firstName = trim($value);
            }
        },
        public string           $lastName {
            get {
                return $this->lastName;
            }
            set {
                $this->lastName = trim($value);
            }
        },
        private readonly Gender $gender,
    )
    {
        $this->firstName = trim($firstName);
        $this->lastName = trim($lastName);
    }

    public function __toString(): string
    {
        $gender = $this->gender->value;

        return "Customer $this->firstName $this->lastName is $gender.\n";
    }
}
