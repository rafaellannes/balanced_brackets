<?php

include('BracketClass.php');

$bracketClass = new BracketClass();


$tests = array(
    '(){}[]' => '',
    '[{()}](){}' => '',
    '[]{()' => '',
    '[{)]' => '',
);

foreach ($tests as $k => $v) {
    $tests[$k] = ($bracketClass->isValidBrackets($k) ? 'VALID' : 'NOT VALID');
}

echo '<pre>';
var_dump($tests);
echo '</pre>';