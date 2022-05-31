<div class="titulo">Operadores Lógicos</div>

<?php

var_dump(true);
echo '<br>';
var_dump(!true);
echo " <p class='divisao'> And </p><hr>";
//operador and
var_dump(false && false);
var_dump(false and false);

echo " <p class='divisao'> Or </p><hr>";
//operador or
var_dump(false || false);
var_dump(false or false);

echo " <p class='divisao'> Xor </p><hr>";
//operador xor
var_dump(true != false);
var_dump(true xor false);



//exemplos
echo "<br>";

$idade = 62;
$sexo = 'F';

if(
    ($idade >= 60 and $sexo === 'F') or 
    ($idade >= 65 and $sexo === 'M')
    ){
    echo 'Pode se aposentar';
}else{
    echo 'terá de trabalhar mais um pouco';
}
