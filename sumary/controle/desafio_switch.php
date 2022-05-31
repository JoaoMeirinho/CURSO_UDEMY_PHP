<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param" id="">
    <select name="conversao" id="conversao">
        <option value="km-milha"> Km > Milha</option>
        <option value="milha-km"> Milha > Km</option>
        <option value="metro-km"> Metro > Km</option>
        <option value="km-metro"> Km > Metro</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
$value = $_POST['param'] ?? 0;
$convert = $_POST['conversao'] ?? 0;

switch($convert){
    case "km-milha":
       $convertedValue = $value * 0.621371; 
       echo "$convertedValue Milhas"; 
       break;
    case "milha-km":
       $convertedValue = $value / 0.621371; 
       echo "$convertedValue Km"; 
       break;
    case "metro-km":
       $convertedValue = $value / 1000; 
       echo "$convertedValue Km"; 
       break;
    case "km-metro":
       $convertedValue = $value * 1000; 
       echo "$convertedValue Metros"; 
       break;
    default:
        echo "Unidade de conversão não definida";
}