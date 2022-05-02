<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1);
var_dump(1 > 1);

echo "<p>Relacionais no If/Else</p><hr>";

$idade = 25;

if($idade < 18){
    echo "Menor de idade";
}else if($idade < 65){
    echo "Adulto";
}else{
    echo "Terceira idade";
}

echo "<p>Spaceship</p><hr>";

var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(50 <=> 100);
?>

<style>
    p{
        margin-bottom: 0px;
    }
    hr{
        margin-top: 0px;
    }
</style>