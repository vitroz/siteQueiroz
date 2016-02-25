<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel='shortcut icon' type='image/png' href='imgs/favicon.png'/>

    <title>Queiroz Center</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
        <!-- Navigation -->
    <?php include 'header.html' ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('imgs/DSC01654.JPG');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imgs/DSC01803.JPG');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imgs/QCenterNight.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                    <label class="centroEmp">Centro Empresarial</label> <b class="tituloMain">QUEIROZ CENTER</b>
                </h3>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-building"></i> Novidade na ilha!</h4>
                    </div>
                    <div class="panel-body">
                        <p>Novo empreendimento que veio para ficar. Venha ter uma história de sucesso conosco!</p>
                        <a href="pricing.php" class="btn btn-success pull-right">Saiba <b>mais</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-car"></i> Fácil Acesso, Ótima Localização</h4>
                    </div>
                    <div class="panel-body">
                        <p> Localizado na Avenida dos Holandeses, avenida de fácil acesso, e com bastante movimento de domingo a domingo. </p>
                        <a href="contact.php" class="btn btn-success pull-right">Saiba <b>como chegar</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-shopping-cart"></i> Opções diversificadas</h4>
                    </div>
                    <div class="panel-body">
                        <p>Estacionamento, Alimentação, Pet Shop, Moda e Vestuário, Beleza, Pilates, entre outros...<br> Possuimos grande variedade de lojistas para atender aos mais diversos públicos. </p>
                        <a href="parceiros.php" class="btn btn-success pull-right"><b>Conheça</b> alguns de nossos parceiros.</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Galeria</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a>
                    <img class="img-responsive img-portfolio img-hover imgGaleriaTotem"  src="imgs/totemQC.JPG" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a>
                    <img class="img-responsive img-portfolio img-hover imgGaleria"  src="imgs/NatalQC.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a>
                    <img class="img-responsive img-portfolio img-hover imgGaleria" src="imgs/LATERAL.JPG" alt="">
                </a>
            </div>           
        </div>
        <!-- /.row -->

        <hr>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="rodapeTexto">Copyright &copy; Queiroz Center 2015 - Avenida dos Holandeses 7508 - Olho D'água, São Luis - MA</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $("document").ready(function() {

        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })

        if(screen.width > 768){
            $(".tituloMain").animate({left: '100px'}, 1200);
            $(".centroEmp").animate({left: '100px'}, 1200);
        }

    });

    </script>

</body>

</html>
