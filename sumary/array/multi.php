<div class="titulo">Arrays Multidimensionais</div>

<?php

$dados = [
    "pessoa1" => [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São paulo"
    ],

    "pessoa2" => [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Rio de Janeiro"
    ]
];

print_r($dados);
echo '<br>' . $dados["pessoa1"]["idade"];
echo '<br>' . $dados["pessoa2"]["idade"];

$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "México"
];

echo "<br>";
print_r($dados);


$dados[0]["vizinho"] = "Carlos";

echo '<br>';

print_r($dados[0]);

unset($dados["pessoa2"]);

echo '<br>';

print_r($dados);