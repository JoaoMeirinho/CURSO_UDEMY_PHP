<div class="titulo">Arrays Constantes</div>


<?php

const FRUTAS = ['laranja', 'abacaxi'];

echo FRUTAS[0];


const CARROS = [
    "fiat" => 'uno', 
    'ford' => 'fiesta'
];

echo '<br>' . CARROS['fiat'];

define('CIDADES', array('Belo horizonte', 'Recife'));