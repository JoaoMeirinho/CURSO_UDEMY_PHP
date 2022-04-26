<div class="titulo">Conversões de tipos</div>

<?php

echo is_int(PHP_INT_MAX);

//int pra float

echo '<br>';

var_dump(PHP_INT_MAX + 1);
echo '<br>';

var_dump(1 + 1.0);
echo '<br>';

var_dump((float) 3);

//float pra int

echo "<p> float pra int </p>";

var_dump((int) 6.8);
echo '<br>';

var_dump(intval(2.999));
echo '<br>';

var_dump((int) round(2.8));

// operações com string

echo '<p> String </p>';
var_dump(3 + "2");
echo '<br>';

var_dump("3" . 2);
echo '<br>';

echo is_string("3". 2);
echo '<br>';

echo is_string("3" + 2);
echo '<br>';

// echo is_string(1 + "cinco");
// echo '<br>';

echo is_string(1 + "5 cinco");
echo '<br>';

var_dump(1 + "2 + 5");
echo '<br>';

var_dump((int) "10.5");
echo '<br>';

var_dump((float) "10.5");

