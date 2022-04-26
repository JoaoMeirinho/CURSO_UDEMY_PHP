<div class="titulo">Tipo booleano</div>

<?php

echo TRUE;

echo '<br>';

echo FALSE;

echo '<br>';

echo var_dump(true);

echo '<br>';

echo var_dump(false);

echo '<br>';

echo is_bool((bool) 1); //apenas zero sera mantido como false

echo '<br>';

echo var_dump((bool) 20); //apenas zero sera mantido como false

echo '<br>';

echo var_dump((bool) -20); //apenas zero sera mantido como false

echo '<br>';

echo var_dump(!!20); // !! servem como conversão para boolean

