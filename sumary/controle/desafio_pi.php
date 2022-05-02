<div class="titulo">Desafio PI</div>


<?php

echo pi();
$pi = 3.14;

if($pi === pi()){
    echo "Iguais!";
}else {
    echo "diferentes";
}

//resposta

echo "<br>" . ($pi - pi());
echo "<br>" . ($pi - pi());

if ($pi - pi() <= 0.01){
    echo "Praticamente iguais";
}else {
    echo "Diferentes";
}