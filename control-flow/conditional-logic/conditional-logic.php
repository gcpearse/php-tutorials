<?php

// Note the alternative syntax using colons and endif
function display_grade($score): void
{
    if ($score >= 70):
        echo "$score% - A";
    elseif ($score >= 60):
        echo "$score% - B";
    elseif ($score >= 50):
        echo "$score% - C";
    elseif ($score >= 40):
        echo "$score% - D";
    else:
        echo "$score% - F";
    endif;

    echo "\n";
}

for ($i = 0; $i < 10; $i++) {
    display_grade(rand(1, 100));
}
