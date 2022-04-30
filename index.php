<!DOCTYPE html>

<html lang="pt-BR">   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">   

        <!-- Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    

        <script>
            function cadastrar() {
                var nome = document.getElementById('nome').value;
                var email = document.getElementById('email').value;
                var nascimento = document.getElementById('nascimento').value;
                var telefone = document.getElementById('telefone').value;

                if(nome == '' || email == '' || nascimento == '' || telefone == ''){
                    alert("Preencha todos os campos");
                }else{
                    var form_data = new FormData();
                    form_data.append("nome", nome);   
                    form_data.append("email", email); 
                    form_data.append("nascimento", nascimento); 
                    form_data.append("telefone", telefone); 
                    $.ajax({
                        url:"data/cadastrar.php",
                        method:"POST",
                        data: form_data,
                        dataType: 'text', 
                        cache: false,
                        contentType: false,
                        processData: false,
                        success:function(data){
                            alert(data);
                            document.location.reload();
                        }
                    });
                }
            }
        </script>

        <title>IN8Dev</title>
    </head> 

    <body>
        <div class='header'>
            <img class='background' src="img/index-image.jpg"/>
            <nav >
                <img class='icon' src="img/logo-in8-dev.svg"/>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="#top">cadastro</a></li>
                    <li><a href="#top">lista</a></li>
                    <li><a href="#top">sobre mim</a></li>
                </ul> 
            </nav> 
            
            
            <div class='titulo'> 
                <h1 class='title'>ESTÁGIO</h1>
                <h1 class='title2'>PROVA DE SELEÇÃO</h1>
            </div>
        </div>
        <form class='inputs'>
            <h1 class="title3">CADASTRO</h1>
            <div class="form-group">
                <label for="formGroupExampleInput">Nome</label>
                <input type="text" class="form-control" id="nome">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">E-mail</label>
                <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Nascimento</label>
                <input type="text" class="form-control" id="nascimento">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Telefone</label>
                <input type="text" class="form-control" id="telefone">
            </div>
            <button type="button" class="btn btn-lg" onclick="cadastrar()">CADASTRAR</button>
        </form>            

        <div class='tabela table-responsive'>   
            <div class='labelTabelaCadastro'>    
                <h1 class="title4">LISTA DE CADASTRO</h1>  
            </div>     
            <table class="table">
                <thead class="thead">
                    <tr>
                        <td class="row1"></td>
                        <td class="row1">Nome</td>
                        <td class="row1">E-mail</td>
                        <td class="row1">Nascimento</td>
                        <td class="row2">Telefone</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conn = mysqli_connect("", "id17398621_teste", 'uAtKWz5C*TO=|d$s', "id17398621_db_teste");

                        $select = "SELECT id,nome, email, nascimento, telefone FROM tb_usuario";
                        $resultado = mysqli_query($conn, $select);
                        while($dados = mysqli_fetch_array($resultado)){
                    ?>
                        <tr class="table">
                            <td class="row1"><?php echo $dados['id']?></td>
                            <td class="row1"><?php echo $dados['nome']?></td>
                            <td class="row1"><?php echo $dados['email']?></td>
                            <td class="row1"><?php echo $dados['nascimento']?></td>
                            <td class="row2"><?php echo $dados['telefone']?></td>                                    
                        </tr>
                    <?php }; ?>  
                </tbody> 
            </table>            
        </div>
        <div class='rodape'>
            <img class='imgRodape' src="img/rodape-desktop.jpg"/>
            <div class='info'>
                <span>Gabryel Alves Araujo</span>
                <span>gabryel.araujodev@gmail.com</span>
                <span>(31) 98217-6316</span>        
            </div>
        </div>
    </body> 
</html>