<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok
$primeiraConta->defineCpfTitular('123.456.789-10');

echo $primeiraConta->recuperaSaldo();
echo $primeiraConta->recuperaCpfTitular();
