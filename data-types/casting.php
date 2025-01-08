<?php

$vals = [
    1.1,
    1.5,
    1.9,
    'hello',
    '99p',
    null
];

foreach ($vals as $val) {
    echo (int)$val;
    echo '<br>';
}
