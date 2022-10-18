<?php
    $Qntidade = $_POST['txtAltura'];
    $Valor = $_POST['txtBase'];
    $Gratificacao = $_POST['txtGratificacao']
    $Resultado = ($Qntidade * $Valor) + $Gratificacao;
    echo "O resultado é: " , $Resultado;
 ?>