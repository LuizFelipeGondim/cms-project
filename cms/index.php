<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>CMS</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Danki Code</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul id="menu-principal" class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" ref_sys="sobre">Editar sobre <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" ref_sys="cadastrar_equipe">Cadastrar equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" ref_sys="gerenciar_equipe">Gerenciar equipe</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="?sair" class="color-white">Sair</a> <!-- colocar ícone -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-9"> <!-- colocar ícone de engrenagem -->
                        <h2>Paniel de controle</h2>
                    </div>
                    <div class="col-md-3 ">
                        <p>Seu último login foi em: 12/09/2019</p>
                    </div>
                </div>
            </div>
        </header>

        <section class="bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#"></a>ddsg</li>
                    <li class="breadcrumb-item active">dddd</li>
                </ol>
            </div>
        </section>

        <section class="principal">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="#" class="list-group-item color-white bg-dark" ref_sys="sobre">
                                <!-- colocar ícone --> Sobre
                            </a>
                            <a href="" class="list-group-item" ref_sys="cadastrar_equipe">
                                Cadastrar equipe
                            </a>
                            <a href="" class="list-group-item" ref_sys="gerenciar_equipe">
                                Gerenciar equipe
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card" style="width: 18rem;" id="sobre_section">
                            <div class="card-header bg-dark color-white">
                                Sobre
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <form method="post" class="col-md-12">
                                        <div class="form-group">
                                            <label for="textarea">Código HTML: </label>
                                            <textarea name="" id="textarea" class="form-control"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                        <div class="card" style="width: 18rem;" id="cadastrar_equipe_section">
                            <div class="card-header bg-dark color-white">
                                Cadastrar Equipe
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <form method="post" class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome-membro">Nome do membro</label>
                                            <input type="text" class="form-control" id="nome-membro">
                                        </div>
                                        <div class="form-group">
                                            <label for="textarea-desc">Descrição da equipe: </label>
                                            <textarea name="" id="textarea-desc" class="form-control"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                        <div class="card" style="width: 18rem;" id="gerenciar_equipe_section">
                            <div class="card-header bg-dark color-white">
                                Gerenciar equipe
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="bd-example">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nome do membro</th>
                                                    <th scope="col">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($i = 0; $i < 5; $i++){ ?>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td><button type="button" class="btn btn-danger">Excluir</button></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/javascript">

            $(function(){

                scrollItem();

                clickMenu();

                function clickMenu(){
                    $('#menu-principal a, .list-group a').click(function(){
                        $('.list-group a').removeClass('bg-dark').removeClass('color-white');
                        $('#menu-principal a').parent().removeClass('active');
                        $('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');
                        $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('bg-dark').addClass('color-white');

                        return false;
                    })
                }

                function scrollItem(){
                    $('#menu-principal a, .list-group a').click(function(){
                        var ref = '#'+$(this).attr('ref_sys')+'_section';
                        var offset = $(ref).offset().top;
                        $('html,body').animate({'scrollTop':offset});
                    });
                }

            })
        </script>
    </body>
</html>