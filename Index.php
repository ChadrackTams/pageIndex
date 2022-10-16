<?php


$jour = date('d');
$mois = date('m');
$annee = date('Y');
$heure = date('H');
$minute = date('i');

if ($heure>=0 or $heure==12 and $minute<=59)  {

    $_Message="Bonjour";
}

if ($heure>=12 or $heure==14 and $minute<=59)
{
    $_Message="Bon après-midi ";
}


if ($heure>=14 or $heure==23 and $minute<=59)
{
    $_Message="Bonsoir";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>S.N.C.C</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Icon Site -->
    <link href="Icon_Site/Step_favico.png" rel="icon">
    <link href="Icon_Site/Step_favico.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="MISE En forme/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="MISE En forme/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="MISE En forme/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="MISE En forme/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="MISE En forme/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="MISE En forme/lib/animate/animate.min.css" rel="stylesheet">
    <link href="MISE En forme/lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="MISE En forme/css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="MISE En forme/css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="MISE En forme/css/responsive.css" rel="stylesheet">
    <link href="Mis_en_forme_Annonce.css" rel="stylesheet">
    <link href="Style_Eror.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

<div id="preloader"></div>

<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="Index.php">
                                <h1><span>S.</span> N. <span>C.</span> C.</h1>
                                <!-- Uncomment below if you prefer to use an image logo -->
                                <!-- <img src="img/logo.png" alt="" title=""> -->
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">

                                <li>
                                    <a class="page-scroll" href="Login_Admin.php">Connexion</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="Programe_Publie.php">Réserver Billet</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="Programe_Publie.php">Consulter Programme</a>
                                </li>


                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>
<!-- header end -->

<!-- Start Slider Area -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="images/slider/SLD1.jpg" alt="" title="#slider-direction-1" />
            <img src="images/slider/SLD2.jpg" alt="" title="#slider-direction-2" />
            <img src="images/slider/SLD4.jpg" alt="" title="#slider-direction-3" />
        </div>

        <!-- direction 1 -->
       <div id="slider-direction-1" class="slider-direction slider-one">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                         <div class="slider-content">
                             <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">- SOCIETE NATIONALE DE CHEMIN DE FER DU CONGO - </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2"> Lancement du train de luxe Express New Diamant BETON </h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">- SOCIETE NATIONALE DE CHEMIN DE FER DU CONGO -</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2"> Notre soucis est de vous faire voyager dans les conditions meilleurs </h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- direction 3 -->
        <div id="slider-direction-3" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1"> - SOCIETE NATIONALE DE CHEMIN DE FER DU CONGO - </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2"> -- Confort, Rapidité, Sécurité --</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->
<!-- START INFORMATION -->
<div class="F_Bande2">
    <p></p><marquee><h4><font color="white"><Strong CLASS="Bande_Filante_Step2"><?php  if(isset($_Message)){echo $_Message;} ?></strong> et Bienvenue  <STRONG CLASS="Bande_Filante"><?php if(isset($_SESSION['Nom2'])){echo $_SESSION['Nom2'];}?></STRONG>  sur le site Web officiel <strong class="Bande_Filante_Step2" ></strong> de la <STRONG CLASS="Bande_Filante_Step2"> S.N.C.C,  </STRONG>    Nous vous informons  qu'aujourd'hui nous Sommes : <STRONG CLASS="Bande_Filante_Step2"><?php echo ' Le ' . $jour . '/' . $mois . '/' . $annee;?></STRONG> et Il est : <STRONG CLASS="Bande_Filante_Step2"><?php echo   $heure. ' h ' . $minute;?>.</STRONG> </font></h4>
    </marquee>
</div>

<!-- AND INFORMATION -->

<!-- Start About area -->
<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Apropos de la  societé nationale de chamin de fer du Congo</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <a href="#">
                            <img src="images/Logo/Logo_Sncc_New.jpg" alt="Logo de la SNCC">
                        </a>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <a href="#">
                            <h4 class="sec-head">Historique </h4>
                        </a>
                        <p>
                            La société nationale de chemin de fer du Congo (SNCC), établissement public, industriel et commercial a été créé le 02/12/1974 par l’ordonnance-loi N°74/027. <br>
                            Elle est de la fusion de quatre anciens réseaux ferroviaires entre autre : KDL (katanga-dilolo-Leopoldville), CFM, CVC et CFMF.
                            Dotée de la personnalité juridique, elle est soumise au control de ministre de transport et communication qui assure la tutelle.<br>
                            La SNCC est une société anonyme avec conseil d’administration.......................
                        <div class="single-blog">

                            <a href="Historique.php" class="ready-btn" id="Btn_plus_Historique">Lire Plus</a>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div>
<!-- End About area -->
    <!-- Start Suscrive Area -->
    <div class="suscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                    <div class="suscribe-text text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Suscrive Area -->

    <!-- JavaScript Libraries -->
    <script src="MISE En forme/lib/jquery/jquery.min.js"></script>
    <script src="MISE En forme/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="MISE En forme/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="MISE En forme/lib/venobox/venobox.min.js"></script>
    <script src="MISE En forme/lib/knob/jquery.knob.js"></script>
    <script src="MISE En forme/lib/wow/wow.min.js"></script>
    <script src="MISE En forme/lib/parallax/parallax.js"></script>
    <script src="MISE En forme/lib/easing/easing.min.js"></script>
    <script src="MISE En forme/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="MISE En forme/lib/appear/jquery.appear.js"></script>
    <script src="MISE En forme/lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="MISE En forme/contactform/contactform.js"></script>

    <script src="MISE En forme/js/main.js"></script>
</body>

</html>
