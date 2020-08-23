<?php
    $pdo = new PDO('mysql:host=localhost;dbname=projeto_1', 'root', '');
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Imagem da aba -->
        <link rel="shortcut icon" href="../projeto/images/logo.png" >

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/cms.css">
        <title>Painel de mensagens</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Danki Code</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul id="menu-principal" class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="../" class="nav-link color-white">Home</a> <!-- colocar ícone -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" ref_sys="sobre">Painel de controle <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#" ref_sys="cadastrar_equipe">Painel de mensagens</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> <!-- colocar ícone de engrenagem -->
                        <h2>
                            <img src="../assets/images/contact_mail-white-18dp.svg" class="icon">
                            Paniel de mensagens
                        </h2>
                    </div>
                </div>
            </div>
        </header>

        <section class="principal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php     
                            $selecionarMensagens = $pdo->prepare("SELECT * FROM `tb_contato`");
                            $selecionarMensagens->execute();
                            $mensagens = $selecionarMensagens->fetchAll();
                            foreach($mensagens as $key=>$value){ 
                        ?>
                            <div class="card" style="width: 18rem;" id="gerenciar_equipe_section">
                                <div class="card-header bg-dark color-white">
                                    <? echo $value['nome'] ?>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        E-mail: <? echo $value['email'] ?> <hr/>
                                        Mensagem: <? echo $value['mensagem'] ?>
                                    </li>
                                </ul>
                            </div>                                    
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>