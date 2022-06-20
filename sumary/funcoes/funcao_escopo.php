<div class="titulo">Função e escopo</div>


<?php

function imprimirMensagens(){
    echo "Olá! ";
    echo "Até a próxima! <br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();


$variavel = 1;
function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocaDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "durante a função: $variavel <br>";
}


echo "Antes: $variavel <br>";
trocaDeVerdade();
echo "Depois: $variavel <br>";

