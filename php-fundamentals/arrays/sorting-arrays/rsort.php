<?php

$scores = [90, 45, 78, 34, 67, 98, 33];

rsort($scores);
print_r($scores);

$flight_numbers = ['BA100', 'BA200', 'BA1234', 'BA2345', 'BA300'];

rsort($flight_numbers, SORT_STRING | SORT_NATURAL);
print_r($flight_numbers);
