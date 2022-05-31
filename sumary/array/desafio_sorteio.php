<div class="titulo">Desafio Sorteio</div>


<?php

$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];
echo "<h1> Sorteada: {$nomes[array_rand($nomes)]}";