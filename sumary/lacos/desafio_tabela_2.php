<div class="titulo">Desafio tabela 02</div>

<form action="#" method="post">
    <label for="linhas">Linhas</label>
    <input type="number" name="linhas">

    <label for="linhas">Colunas</label>
    <input type="number" name="colunas">

    <button type="submit" name="enviar">Enviar</button>
</form>

<?php
if(isset($_POST['enviar'])){
    $linhas = intval($_POST['linhas']) ?? 10;
    $colunas = intval($_POST['colunas']) ?? 10;
    if(!$linhas) $linhas = 10;
    if(!$colunas) $colunas = 10;
    $cont = 1;
    echo "<table>";

    for($linha = 1; $linha <= $linhas; $linha++){
        echo "<tr>";
        for($coluna = 1; $coluna <= $colunas; $coluna++){
            echo "<td> $cont </td>";
            $cont++;
        }
        echo "</tr>";
    }


    echo "</table>";
}

?>

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