<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel='shortcut icon' type='image/png' href='imgs/favicon.png'/>

    <title>Contato - Queiroz Center</title>

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

   <?php include 'header.html' ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contato
                    <small>- Como Chegar</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Página Inicial</a>
                    </li>
                    <li class="active">Contato</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                    <!-- Embedded Google Map -->
                  <div style="width:800px;overflow:hidden;height:300px;max-width:100%;">
                    <div id="my-map-display" style="height:100%; width:100%;max-width:100%;">
                        <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Av.+dos+Holandeses,+7508-7602+-+Olho+D'agua,+São+Luís+-+MA&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
                        </iframe>
                    </div>
                    <a class="google-code" rel="nofollow" href="https://www.treat-lice.com" id="auth-map-data">treat-lice.com
                    </a>
                    <style>#my-map-display .text-marker{max-width:none!important;background:none!important;}img{max-width:none}
                    </style>
                </div>
                <script src="https://www.treat-lice.com/google-maps-authorization.js?id=5e7de028-5b2e-ff6f-34c7-5dc80a759613&c=google-code&u=1448593384" defer="defer" async="async">
                </script>
                <!-- Contact Details Column -->
            </div>
            <div class="col-md-4">
                <h3>Contato</h3>
                <p>
                   <b>Administrativo</b> 
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Fone</abbr>: (98) 98147-2221</p>
                <p><i class="fa fa-envelope-o"></i><a href="mailto:name@example.com"> georgeanaqueiroz@hotmail.com</a>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Fone</abbr>: (98) 9618-8380</p>
                <p><i class="fa fa-envelope-o"></i><a href="mailto:name@example.com"> gedsondribeiro@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours"></abbr> Segunda - Sexta 8:00 as 18:00 </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/QueirozCenter/?fref=ts"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>                    
                </ul>
            </div>
        </div>
        <!-- /.row -->


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

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
