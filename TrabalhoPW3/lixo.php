<?php

    function CalculolixoAnual($quantidade){
        $lixoAnual = $quantidade * 12;

        return $lixoAnual;
    }
    function ItensReciclados($lixoAnual){
        $reciclado = ($lixoAnual * 0.94);

        return $reciclado;
    }
    function imprime_lixoAnual($nome,  $objeto, $lixoAnual, $reciclado){
        echo("<h1> Calculo do seu lixo anual </h1> <br>"); 
        echo("<b>Nome do Usuario =</b> ".$nome."<br>");
        echo("<b>Lixo =</b> ".$objeto."<br>");
        echo("<b>Lixo Anual (Kg) = </b>".$lixoAnual."<br>");       
        echo("<b>Componentes Reciclados = </b>".$reciclado."<br>"); //Nao esta sendo printado
    }

    $nome = $_POST["nome"];
    $objeto = $_POST["objeto"];
    $quantidade = $_POST["quantidade"];

    $calcLixo = CalculolixoAnual($quantidade);

    $itensRec = ItensReciclados($lixoAnual);

    imprime_lixoAnual($nome,  $objeto, $calcLixo, $itensRec);
?>