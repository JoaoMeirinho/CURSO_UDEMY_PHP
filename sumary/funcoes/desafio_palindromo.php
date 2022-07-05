<div class="titulo">Desafio Palíndromo</div>

<?php
function palindromo($string){
    for($i = 0; $i < strlen($string); $i++){
        if (!($string[$i] == $string[strlen($string) - ($i + 1)])){
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara');

function palindromoWithFunction($string){
    return ($string === strrev($string)) ? "Sim" : "Não";
}

echo palindromoWithFunction('bola');