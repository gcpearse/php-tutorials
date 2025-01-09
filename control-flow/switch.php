<?php

$roles = [
    'owner',
    'admin',
    'supervisor',
    'user',
    'guest'
];

function is_authorised($role): bool
{
    // Note the alternative switch syntax with endswitch
    switch ($role):
        case 'owner':
        case 'admin':
        case 'supervisor':
        case 'user':
            echo "Authorised <br>";
            return true;
        default:
            echo "Unauthorised <br>";
            return false;
    endswitch;
}

// Note the alternative foreach syntax with endforeach
foreach ($roles as $role):
    is_authorised($role);
endforeach;
