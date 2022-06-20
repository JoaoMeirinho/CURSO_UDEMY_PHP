<div class="titulo">Argumentos e retorno de função</div>

<?php

function obterMensagem(){
    return "Seja bem vindo(a)!";
}

obterMensagem();

$mensagem = obterMensagem();
echo $mensagem . "<br>";
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, $nome";
}

echo obterMensagemComNome('João');

function soma($a, $b){
    return $a + $b;
}

echo "<br>" . soma(4, 5);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo "<br>". $variavel;

function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5);

echo '<br>' . $variavel;