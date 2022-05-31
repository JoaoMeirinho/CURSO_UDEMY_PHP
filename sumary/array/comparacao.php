<div class="titulo">Comparação de Arrays</div>


<?php

$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = [ 'idade' => 20, 'nome' => 'Maria'];
var_dump($arr1 === $arr3);

$arr4 = [ 'idade' => '20', 'nome' => 'Maria'];
var_dump($arr3 == $arr4);
var_dump($arr3 === $arr4);
