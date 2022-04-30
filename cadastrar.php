<?php
    $conn = mysqli_connect("", "id17398621_teste", 'uAtKWz5C*TO=|d$s', "id17398621_db_teste");
    date_default_timezone_set ("America/Sao_Paulo");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $nascimento = $_POST['nascimento'];
        $telefone = $_POST['telefone'];
        
        $sql = "INSERT INTO tb_usuario(nome, email, nascimento, telefone) VALUES ('$nome','$email','$nascimento','$telefone')";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            echo "Cadastro realizado com sucesso!";
        } else{
            echo "Ocorreu uma falha, tente novamente.";
        }
        
        $conn.close();
    }
?>