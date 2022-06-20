<div class="titulo">Laço foreach</div>


<?php

$array = ['Segunda', 'Terça', 'Quarta', 'Quinta', 
'Sexta', 'Sábado', 'Domingo'];

foreach ($array as $dia){
    echo "$dia <br>";
}

foreach($array as $indice => $dia){
    echo "$indice => $dia <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $arrays){
    foreach($arrays as $valor){
        echo "$valor<br>";
    }
}

//valo por referência
$numeros = [1, 2, 3, 4, 5];

foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numeros);