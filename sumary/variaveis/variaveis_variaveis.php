<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'ValorA';
$$a =  'ValorAA';

$$a =  'ValorAA';

echo "$a {$$a} ${$a} {$valorA}";
echo '<br>';

$epa = 'opa';
$opa = 'vish';

echo "$epa {$$epa}";