<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\Sintegra\Elements\Z60R;

$std = new stdClass();
$std->PERIODO_EMISSAO = '200505';
$std->CODIGO_PRODUTO = '1';
$std->QUANTIDADE = '01';
$std->VL_PRODUTO = '10';
$std->VL_BC_ICMS = '10';
$std->ALIQUOTA = '4';
$std->VL_ICMS = '040';
$std->BRANCOS = null;

try {
    
    $elem = new Z60R($std);

    header("Content-Type: text/plain");
    echo "{$elem}";
    
    echo "\n";
    echo "\n";
    print_r($elem->errors);
    
} catch (\Exception $e) {
    echo $e->getMessage();
}
