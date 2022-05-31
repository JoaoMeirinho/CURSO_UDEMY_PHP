<div class="titulo">Desafio operadores lógicos</div>

<!--
    Dois trabalhos = terça e quinta
    - se os dois trabalhos forem executados - tv '50 e sorvete
    - se apenas um for executado - tv '32 e sorvete
    - se nenhum for executado - fica em casa mais saudável  
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>

        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>

        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>
<?php
if (isset($_POST['t1']) && isset($_POST['t2'])){
    $primeiroTrabalho = true;
    $segundoTrabalho = false;
    $tv50 = $primeiroTrabalho && $segundoTrabalho;
    $tv32 = $primeiroTrabalho xor $segundoTrabalho;
    $tomarSorvete = $primeiroTrabalho || $segundoTrabalho;
    $ficarEmCasa = !$tomarSorvete;
    var_dump($tv50);
    var_dump($tv32);
    // echo "tv32 = {$tv32}";
    if($tv50){
        echo "tv '50 e tomar sorvete";
    }elseif($tv32){
        echo "tv '32 e tomar sorvete";
    }else{
        echo "ficar em casa";
    }

}