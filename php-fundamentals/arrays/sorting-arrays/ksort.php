<?php

$currencies = [
    'VND' => 'Vietnamese Dong',
    'LAK' => 'Lao Kip',
    'IDR' => 'Indonesian Rupiah',
    'THB' => 'Thai Baht',
];

ksort($currencies);
print_r($currencies);

krsort($currencies);
print_r($currencies);
