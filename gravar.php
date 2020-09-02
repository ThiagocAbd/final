<?php
    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $senha = $_POST ["senha"];

    $conn = mysqli_connect('localhost' , 'root' , '' , 'comercio');

    $sql = "insert into cliente values (null,'".$nome."','".$email."','".$senha."')";

    if (mysqli_query($conn,$sql)){

        echo "Cadastrado com sucesso";
    
    }else{
        echo "Erro ao cadastrar";
    }

    mysqli_close($conn);
     ?>