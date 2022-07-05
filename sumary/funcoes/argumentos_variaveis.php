<div class="titulo">Argumentos Váriaveis</div>

<?php

function soma($a, $b){
    return $a + $b;
}


function somaCompleta(...$numeros){
    $soma = 0;
    foreach ($numeros as $numero){
        $soma += $numero;
    }
    return $soma;
}

echo somaCompleta(3,4,55,6,6,7,2);

$array = [1,2,3];
echo '<br>'. somaCompleta(...$array);

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';

membros("João", "ana", 'Maria', 'Roberto');