<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

require_once __DIR__ . '/../vendor/autoload.php';

use Btime\App\Classes\CaixaEletronico;

$atm = new CaixaEletronico();

try {
    var_dump($atm->sacar(53));
} catch (\Exception $e) {
    echo $e->getMessage();
}
