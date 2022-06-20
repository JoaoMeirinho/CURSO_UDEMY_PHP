<div class="titulo">Desafio Tabela</div>

<table>
<?php
$array = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach($array as $indice => $linha){
    echo ($indice % 2 === 0) ? "<tr class = 'par'>" : "<tr class = 'impar'>" ;
    foreach($linha as $valor){
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
?>

</table>

<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border : 1px solid #444;
    }

    .impar{
        background-color: #66ffff;
    }

    .par{
        background-color: #668cff;
    }

    table td{
        padding: 10px 20px;
    }
</style>