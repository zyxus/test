<?php

function count_atoms(string $formula): array {

    $formulaParser = "/(([A-Z][a-z])([0-9]{0,}))|(([A-Z])([0-9]{0,}))/";
    preg_match_all($formulaParser, $formula, $formulaContent);

//    var_dump($formulaContent);

    return [];
}

function parse_molecule(string $formula): array {

    $bracketsRegexp = "/[\(,\[](.[^\(,\[,\),\]]*)[\),\]]([0-9]*)/";

    do {

        $bracketsExists = false;
        preg_match_all($bracketsRegexp, $formula, $bracketsContent);
//        var_dump($bracketsContent);

        foreach ($bracketsContent[0] as $key => $value) {
//            count_atoms($value);
            print PHP_EOL . "=================" . PHP_EOL . $value;
            $formula = str_replace($value, "", $formula);
            $bracketsExists = true;
        }

    } while($bracketsExists);

    return [];
}

print str_repeat(PHP_EOL, 100) . "=================" . PHP_EOL;

//parse_molecule('H2O'); // => ['H' => 2, 'O' => 1]
//parse_molecule('Mg(OH)2'); // => ['Mg' => 1, 'O' => 2, 'H' => 2]
//parse_molecule('K4[ON(SO3)2]2'); // => ['K' => 4, 'O' => 14, 'N' => 2, 'S' => 4]
//parse_molecule('K4[ON(NO3)2]'); // => ['K' => 4, 'O' => 14, 'N' => 2, 'S' => 4]
parse_molecule('H2(SO)4'); // => ['K' => 4, 'O' => 14, 'N' => 2, 'S' => 4]

strrev($formula);

print str_repeat(PHP_EOL, 2) . "=================" . PHP_EOL;