<?php

$countries = [
    'France' => 543_941,
    'Germany' => 357_581,
    'Italy' => 301_958,
    'Spain' => 498_485
];

asort($countries);
print_r($countries);

arsort($countries);
print_r($countries);
