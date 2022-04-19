<div class="titulo">String</div>

<?php

echo 'eu sou uma string';

echo '<br>';

var_dump("Eu também");


//concatenação

echo "Nós também" . ' somos';

echo '<br>', 'também aceito', 'virgulas';

echo '<br>';

echo "'teste'", '"teste"';

print("<br> Também existe a função print");

//algumas funções

echo '<br>', strtoupper("Maiúscula");
echo '<br>', strtolower("MINÚSCULA");
echo '<br>', ucfirst("primeira letra em maiusculo");
echo '<br>', ucwords("primeira letra de cada palavra em maiusculo");
echo '<br>', strlen("Quantas letras");
echo '<br>', mb_strlen("Eu também", "utf-8"); //função mais atual
echo '<br>', substr("Só uma parte mesmo", 7, 6); 
echo '<br>', str_replace("isso", 'aquilo', 'trocar isso'); 


