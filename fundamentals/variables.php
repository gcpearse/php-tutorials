<?php

$role = 'admin';
$age = 30;

function display_var_info($var): void
{
    var_dump($var);
    echo '<br>';
}

display_var_info($role);
display_var_info($age);
