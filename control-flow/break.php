<?php

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        // Specify break n to break out of enclosing structures
        if ($j === 2) break 2;
        echo "[$i, $j]\n";
    }
}
