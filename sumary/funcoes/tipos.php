<div class="titulo">Declarando Tipos</div>

<?php

function somar($a, $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar(1,2) . "<br>";
echo somar(1.7 ,2.5) . "<br>";
echo somar(1,'2dois') . "<br>";


function somar2(int $a, int $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1,2) . "<br>";
echo somar2(1.7 ,2.5) . "<br>";
// echo somar2(1,'2dois') . "<br>";

function somar3($a, $b): int{
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar3(1,2) . "<br>";
echo somar3(1.7 ,2.5) . "<br>";
echo somar3(1,'2dois') . "<br>";