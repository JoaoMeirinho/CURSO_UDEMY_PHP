<div class="titulo">Recursividade</div>

<?php

function somaAteUm($num){
    $sum = 0;
    for(; $num >= 1; $num--){
        $sum += $num;
    }
    return $sum;
}

echo somaAteUm(4) . '<br>';

function recursivaAteUm($num){
   if($num === 1){
    return 1;
   }
   return $num + recursivaAteUm($num - 1);
}

echo recursivaAteUm(4) . '<br>';


function somaRecursivaEconomica($num){
    return $num === 1 ? 1 : $num + somaRecursivaEconomica($num - 1);
}