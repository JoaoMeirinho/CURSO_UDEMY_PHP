<div class="titulo">Método POST</div>

<form action="#" method="post">
    <input type="text" name="nome" id="">
    <input type="text" name="sobrenome" id="">

    <select name="estado" id="">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
print_r($_POST);