<?php

// Use underscores to make long floats more readable
var_dump(is_float(1_000_000.01));
echo '<br>';

// Floats are represented imprecisely
var_dump(0.1 + 0.1 + 0.1);
