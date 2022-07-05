<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente"){
    echo "Bem vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(null);
saudacao(null,null);
saudacao("João", 'Roberto');

function anotarPedido($comida, $bebida = 'Água'){
    echo "$comida para comer <br>";
    echo "$bebida para beber <br>";
}

anotarPedido('Arroz');