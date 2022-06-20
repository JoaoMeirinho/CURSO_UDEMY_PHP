<div class="titulo">Desafio impressão</div>

<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
];

for ($i = 0; $i < count($array); $i++){
    if($i % 2 === 1) continue;
    echo "{$array[$i]}";
}

echo "<br>";

foreach($array as $indice => $valor){
    if($indice % 2 === 1) continue;
    echo "$valor";
}