<div class="titulo">Básico array</div>

<?php

$lista = array(1, 2, 3.4, "Texto");
var_dump($lista);
echo "<br>";
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];

$texto = "Esse é um texto de teste";
//caracteres com acento contam duas casas

echo '<br>' . mb_substr($texto, 10, 1);