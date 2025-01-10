<?php

function greet_two_people($name1, $name2, $end_punctuation = "!"): void
{
    echo "Hello, $name1 and $name2$end_punctuation\n";
}

greet_two_people('Matt', 'Rob');
greet_two_people('Freya', 'Laura', '.');
