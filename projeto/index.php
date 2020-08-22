<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Projeto Dev Web</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Danki Code</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown07">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="box">
        <section class="banner">
            <div class="overlay"></div>
            <div class="container chamada-banner">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2> <? echo htmlentities('<') ?>Danki.Code<? echo htmlentities('>') ?></h2>
                        <p>Empresa voltada para desenvolvimento web e marketing digital</p>
                        <a href="#">Saiba Mais!</a>
                    </div><!-- col-md-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </section>

        <section class="cadastro-lead">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h2> <span class="glyphicon glyphicon-start"></span> Entre em nossa lista!</h2>
                    </div>
                    <div class="col-md-6">
                        <form method="post">
                            <input type="text" name="nome"><input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="depoimento text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Depoimento</h2>
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
                    <div class="col-md-4">
                        <h3>Diferencial #1</h3>
                        <p>Praesent at nisi nunc. Curabitur mollis dolor eget aliquet tincidunt. Suspendisse 
                            scelerisque felis turpis, vel commodo justo vestibulum ac. Nullam interdum congue 
                            gravida. Pellentesque imperdiet sem vitae mauris pretium suscipit.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Diferencial #2</h3>
                        <p>Praesent at nisi nunc. Curabitur mollis dolor eget aliquet tincidunt. Suspendisse 
                            scelerisque felis turpis, vel commodo justo vestibulum ac. Nullam interdum congue 
                            gravida. Pellentesque imperdiet sem vitae mauris pretium suscipit.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Diferencial #3</h3>
                        <p>Praesent at nisi nunc. Curabitur mollis dolor eget aliquet tincidunt. Suspendisse 
                            scelerisque felis turpis, vel commodo justo vestibulum ac. Nullam interdum congue 
                            gravida. Pellentesque imperdiet sem vitae mauris pretium suscipit.</p>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- box -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>