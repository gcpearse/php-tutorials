<?php

$word = 'world';

// A heredoc string behaves like a string in double quotation marks
$heredoc_message = <<<IDENTIFIER
The programmer said "Hello, $word!".
This is an example of heredoc syntax.

IDENTIFIER;

echo $heredoc_message;

// A nowdoc string behaves like a string in single quotation marks
$nowdoc_message = <<<'IDENTIFIER'
The programmer said "Hello, world!".
This is an example of nowdoc syntax.

IDENTIFIER;

echo $nowdoc_message;
