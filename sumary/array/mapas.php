<div class="titulo">Arrays como mapas</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => 'verde',
    "peso" => 49.8,
);


print_r($dados);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e"
);

$lista[] = 'i';
echo "<br>";
print_r($lista); 