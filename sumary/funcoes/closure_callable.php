<div class="titulo">Closure e Callable</div>

<?php
$soma1 = function ($a, $b){
    return $a + $b;
};

function soma2($a, $b){
    return $a + $b;
}

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2, 3) . ' ';
echo (is_callable('soma2') ? 'Sim' : 'Não') . '<br>';

var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', 'soma2');
// executar1(2, 3, '+', 3);

function executar2($a, $b, $op, Closure $funcao){
$resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar2(4, 5, '+', $soma1);
// executar2(3, 3, '+', 'soma2'); "Não executavel, pois não é uma função anonima"
// executar2(2, 3, '+', 3);