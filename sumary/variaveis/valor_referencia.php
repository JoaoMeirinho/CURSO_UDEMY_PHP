<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel;

$variavelValor = $variavel;
echo "<br> $variavelValor";

$variavelValor = 'Novo valor';
echo "<br> $variavel";
echo "<br> $variavelValor";

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br> $variavel";
echo "<br> $variavelReferencia";


