<?php

$count = 0;

// Note the alternative for loop syntax with endfor
for ($i = 0; $i < 5; $i++):
    $count++;
endfor;

echo "Final count: $count";
