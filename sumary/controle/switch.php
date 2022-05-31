<div class="titulo">Switch</div>


<?php
$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if ($categoria === 'luxo'){
    $carro = 'Mercedes';
    $preco = 250000;
} else if($categoria === 'SUV'){
    $carro = 'Renegade';
    $preco = 80000;
}else if($categoria === 'Sedan'){
    $carro = 'Etios';
    $preco = 55500;
}else{
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo "<p>Carro: $carro<br> Preço: R$ $precoFormatado</p>";

$categoria = '???';
switch ($categoria){
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 25000;
        break;
    case 'SUV':
        $carro = 'renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carros = 'Etios';
        $preco = 55000;
    default:
        $carro = 'Mobi';
        $preco = 33000;
}
            
$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br> Preço: R$ $precoFormatado</p>";