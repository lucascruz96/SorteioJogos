<?php
require_once('../src/MegaSena.php');

use SorteioJogos\MegaSena;

$quantidadeDezenas = 6;
$totalJogos = 25;

$megaSena = new MegaSena($quantidadeDezenas, $totalJogos);

$megaSena->gerarJogos();
$megaSena->sortearDezenas();

echo $megaSena->conferirJogos();