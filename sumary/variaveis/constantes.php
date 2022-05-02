<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 2);

echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;

$valorVariavel = 2.8;

define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel; Gera erro!

echo '<br>' . NOVISSIMA_TAXA;
echo '<br>' . PHP_VERSION;