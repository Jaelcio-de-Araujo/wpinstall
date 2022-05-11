<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalador Wordpress V1.0</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- CSS Padrão -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div class="container jumbotron">
    <!-- Logo Wp -->
    <i class="bi bi-wordpress header"></i>

    <header class="header">
        <h1>Instalador do Wordpress</h1>
    </header>

    <!-- Mensagem -->
    <section>
        <h5 class="observation">Desenvolvido com muito carinho. <i class="bi bi-heart-fill"></i></h5>
    </section>
</div>
    
    <!-- Observação -->
    <div class="container">
    <section>
        <h5 class="important">"Não nos responsabilizamos sobre perdas ou deleção de arquivos do seu ftp ou site; é de <b>extrema importância</b> que você  
        não tenha arquivos no ftp dentro da pasta <b>public_html</b>". Antes de iniciar a instalação veja o víodeo se tiver duvidas do funcionamento do instalador.</h5>
    </section>

    <!-- Passo 01 dados de FTP -->
    <section id="passo01">
    <form method="post" action="php/controller.php">
        <h1 class="display-1">Passo 1</h1>
        <label for="host">Informe o endereço de FTP:</label>
        <input type="text" class="form-control" id="host" aria-describedby="host" placeholder="Informe o host aqui" name="host" required> 
        <label for="user">Informe o usuario de FTP:</label>
        <input type="text" class="form-control" id="user" aria-describedby="user" placeholder="Informe o usuario aqui" name="user" required>
        <label for="pass">Informe a senha de FTP:</label>
        <input type="password" class="form-control" id="pass" aria-describedby="pass" placeholder="Informe a senha aqui aqui" name="pass" required>
    </section>

    <!-- Passo 02 dados do banco de dados -->
    <section id="passo01">
        <h1 class="display-1">Passo 2</h1>
        <label for="host_db">Informe o nome do banco de dados:</label>
        <input type="text" class="form-control" id="host_bd" aria-describedby="host_db" placeholder="Informe o host aqui" name="host_db" require> 
        <label for="user_db">Informe o usuario do banco de dados:</label>
        <input type="text" class="form-control" id="user_db" aria-describedby="user_db" placeholder="Informe o usuario aqui" name="user_db" require>
        <label for="pass_db">Informe a senha do banco de dados:</label>
        <input type="password" class="form-control" id="pass_db" aria-describedby="pass_db" placeholder="Informe a senha aqui aqui" name="pass_db" require>
        
        <div class="progress">
        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <input type="submit" class="btn btn-primary" value="Ir para o próximo passo">
        </form>
    </section>


</div>
</body>
</html>