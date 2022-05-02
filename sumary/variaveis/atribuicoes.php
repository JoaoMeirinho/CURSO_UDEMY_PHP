<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;

echo '<br>' . $numero;
echo '<br>' . $numero--;
echo '<br>' . $numero++;
echo '<br>' . $numero += 5;
echo '<br>' . $numero -= 5;
echo '<br>' . $numero *= 5;

$texto = 'Texto qualquer';

$texto .= 'mais esse texto';

$variavelInexistente = 'Valor existente';
echo '<br>' . $variavelInexistente;

$valor = $valorInexistente ?? "Valor default";
 