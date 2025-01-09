<?php

function create_user(
    $first_name,
    $last_name,
    $email,
    $avatar_url = '',
    $role = 'user'
): array
{
    return [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'avatar_url' => $avatar_url,
        'role' => $role
    ];
}

$user = create_user(
    first_name: 'John',
    last_name: 'Smith',
    email: 'john@example.com',
    role: 'admin'
);

foreach ($user as $key => $value) {
    echo "$key: $value\n";
}
