<?php

    function printa_usuario($nomeUser,  $sobrenome,  $telefone, $email, $cidade, $estado){
        echo("<h1> Usuario Cadastrado como: </h1> <br>"); 
        echo("<b>Nome =</b> ".$nomeUser."<br>");
        echo("<b>Sobrenome =</b> ".$sobrenome."<br>");
        echo("<b>Telefone =</b> ".$telefone."<br>");
        echo("<b>Email = </b>".$email."<br>");
        echo("<b>Cidade = </b>".$cidade."<br>");
        echo("<b>Estado = </b>".$estado."<br>");
    }
    $nomeUser = $_POST["nomeUser"];
    $sobrenome = $_POST["sobrenome"];
    $telefone = $_POST ["telefone"];
    $email = $_POST ["email"];
    $cidade = $_POST ["cidade"];
    $estado = $_POST ["estado"];

    printa_usuario($nomeUser, $sobrenome, $telefone, $email, $cidade, $estado);

?>