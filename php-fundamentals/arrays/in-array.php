<?php

$numbers = [1, 2, 3, '4'];

var_dump(in_array(3, $numbers));
var_dump(in_array(4, $numbers));
var_dump(in_array(4, $numbers, true));
var_dump(in_array(5, $numbers));
