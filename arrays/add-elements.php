<?php

// Prepend an element to an indexed array
$roles = [
    'user',
    'guest'
];

array_unshift($roles, 'supervisor');
print_r($roles);

array_unshift($roles, 'owner', 'admin');
print_r($roles);

// Prepend an element to an associate array
$books = [
    'Lord of the Flies' => 'William Golding',
    '1984' => 'George Orwell'
];

$books = ['Emma' => 'Jane Austen'] + $books;
print_r($books);

// Append an element to an array
$shopping_list = [
    'Bananas',
    'Cherries'
];

// Append a single element
$shopping_list[] = 'Dates';
print_r($shopping_list);

// Append multiple elements
array_push($shopping_list, 'Figs', 'Oranges');
print_r($shopping_list);
