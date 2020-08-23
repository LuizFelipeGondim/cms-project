<?php
    $pdo = new PDO('mysql:host=localhost;dbname=projeto_1', 'root', '');
    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
    $sobre->execute();
    $sobre = $sobre->fetch()['sobre'];
    
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Imagem da aba -->
    <link rel="shortcut icon" href="projeto/images/logo.png" >

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home</title>

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Danki Code</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cms">Painel de controle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cms/mensagens.php">Painel de mensagens</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="box">
        <section class="banner">
            <div class="overlay"></div>
            <div class="container chamada-banner">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2> <? echo htmlentities('<') ?>Danki.Code<? echo htmlentities('>') ?></h2>
                        <p>Empresa voltada para desenvolvimento web e marketing digital</p>
                        <a href="#" id="saiba_mais" >Saiba Mais!</a>
                    </div><!-- col-md-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </section>

        <section class="depoimento text-center">
            <h2>Depoimento</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <blockquote>
                            Praesent at nisi nunc. Curabitur mollis dolor eget aliquet tincidunt. Suspendisse 
                            scelerisque felis turpis, vel commodo justo vestibulum ac. Nullam interdum congue 
                            gravida. Pellentesque imperdiet sem vitae mauris pretium suscipit. Suspendisse quis 
                            fringilla tellus. Praesent iaculis quam hendrerit leo elementum, eget lobortis quam 
                            malesuada. Proin convallis tristique sollicitudin. Sed a pharetra quam.
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <section class="diferenciais text-center">
            <h2>Conheça nossa empresa!</h2>
            <div class="container diferenciais-container">
                <div class="row">
                    <?php echo $sobre ?>
                </div>
            </div>
        </section>

        <section class="equipe">
            <h2>Equipe</h2>
            <div class="container equipe-container">
                <div class="row width-100">
                    <?php     
                        $selecionarMembros = $pdo->prepare("SELECT `nome`,`descricao` FROM `tb_equipe`");
                        $selecionarMembros->execute();
                        $membros = $selecionarMembros->fetchAll();
                        foreach($membros as $key=>$value){ 
                    ?>
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="col-md-12 equipe-top">
                                    <div class="user-picture">
                                        <span class="material-icons icon-equipe">
                                            account_circle
                                        </span>
                                    </div>
                                    <h3><? echo $value['nome'] ?></h3>
                                </div>
                                <div class="col-md-12 content">
                                    <p><? echo $value['descricao'] ?></p>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>

        <section class="final-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php if(isset($_POST['acao'])){
                                $nome = $_POST['nome'];
                                $email = $_POST['email'];
                                $mensagem = $_POST['mensagem'];

                                if($nome === '' || $email === '' || $mensagem === ''){
                                    echo '<div class="alert alert-danger" role="alert"> Este(s) campo(s) não pode(m) ficar vazio(s)</div>';
                                }else{
                                    $sql = $pdo->prepare("INSERT INTO `tb_contato` VALUES (null,?,?,?)");
                                    $sql->execute(array($nome, $email, $mensagem));
                                    echo '<div class="alert alert-info" role="alert"> Mensagem enviada com sucesso</div>';
                                }
                            }
                        ?>
                        <h2>Fale conosco</h2>
                        <form method="post">
                            <div class="form-group">
                                <label for="nome">Nome: </label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail: </label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="mensagem">Mensagem: </label>
                                <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button type="submit" name="acao" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="container-balao">
                            <img src="assets/images/balao.svg" alt="Balão de conversa">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- box -->

    <footer>
        <p class="text-center">Todos os direitos reservados</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script type="text/javascript">

            $(function(){

                clickSaibaMais();

                function clickSaibaMais(){
                    $('#saiba_mais').click(function(){
                        alert('Não vou fazer propaganda de graça :)');
                        return false;
                    })
                }

            })
        </script>
  </body>
</html>