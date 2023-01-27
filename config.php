<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "facebook";



$conexao = new mysqli($host, $user, $password, $database);

if($conexao->connect_errno){
    echo "Tem algum erro de conexão";
} else {
    echo " CONEXÃO ATIVA ";
}



?>


<?php
/*
// conectando ao banco de dados
$link = mysqli_connect("localhost","root","", "facebook");

// verificando conexão
if(!$link){
    die("falha na conexão: ". mysqli_connect_error());
}

// criando tabela de usuários

    if(mysqli_query($link,$sql)){
        echo "tabela de usuários criada com sucesso";
    } else{
        echo "Erro ao criar tabela:". mysqli_error($link);
    }

    // fechando conexão
    mysqli_close($link);
*/
?>