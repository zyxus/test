<?php

function parse_molecule(string $formula): array {

    $formula = strrev($formula);

    print $formula;

    for ($i = 0; $i < strlen($formula); $i++) {
        print $formula[$i] . PHP_EOL;
    }



    return [];
}

print str_repeat(PHP_EOL, 100) . "=================" . PHP_EOL;

//parse_molecule('H2O'); // => ['H' => 2, 'O' => 1]
//parse_molecule('Mg(OH)2'); // => ['Mg' => 1, 'O' => 2, 'H' => 2]
//parse_molecule('K4[ON(SO3)2]2'); // => ['K' => 4, 'O' => 14, 'N' => 2, 'S' => 4]
parse_molecule('K4[ON(NO3)2]'); // => ['K' => 4, 'O' => 14, 'N' => 2, 'S' => 4]
//parse_molecule('HN2Mg2(SO)4'); // => ['K' => 4, 'O' => 14, 'N' => 2, 'S' => 4]

print str_repeat(PHP_EOL, 2) . "=================" . PHP_EOL;