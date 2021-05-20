<?php require('modules/dataLoad.php') ?>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $profile['profile']['firstName'] . ' ' . $profile['profile']['lastName'] ?> Resume</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat:400,500,600,700|Open+Sans:400,400i,700"
          rel="stylesheet">
    <!-- Bootstrap core CSS-->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon Fonts-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <!-- Plugins-->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/vertical.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Template core CSS-->
    <link href="assets/css/template.css" rel="stylesheet">
</head>
    <body>
    <!-- Preloader-->
    <div class="page-loader">
        <div class="cssload-container">
            <div class="cssload-whirlpool"></div>
        </div>
    </div>
    <!-- Preloader end-->

    <!-- Header-->
    <header class="header header-center">
        <div class="container-fluid">
            <!-- Brand-->
            <div class="inner-header">
                <a class="inner-brand" href="index.php">
                    <img class="brand-dark" src="assets/images/logo.png" width="30px" alt="">
                    <img class="brand-light" src="assets/images/logo-light.png" width="30px" alt="">
                </a>
            </div>
            <!-- Navigation-->
            <div class="inner-navigation collapse">
                <div class="inner-nav onepage-nav">
                    <ul>
                        <?php require('modules/navigation.php') ?>
                        <li class="menu-item-has-children">
                            <a href="#"><span class="menu-item-span">Languages</span>
                            </a>
                            <ul class="sub-menu">
                                <?php require('modules/langNavigation.php') ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Mobile menu-->
            <div class="nav-toggle">
                <a href="#" data-toggle="collapse" data-target=".inner-navigation">
                    <span class="icon-bar"></span><span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </div>
        </div>
    </header>
    <!-- Header end-->

    <!-- Wrapper-->
    <div class="wrapper">
        <!-- Page Header-->
        <section class="module-header full-height parallax bg-dark bg-dark-30 text-left" id="home" data-background="assets/images/module-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h1 m-b-15"><?= $profile['profile']['firstName'] ?><br/><?= $profile['profile']['lastName'] ?></h1>
                        <h1 class="h6 m-b-60"><?= $profile['profile']['headline'] ?></h1>
                        <p><a class="btn btn-brand" href="assets/jose-rivas-resume.pdf"><span>Download resume</span></a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header end-->

        <!-- Profile-->
        <section class="module" id="profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="m-title c-align">
                            <h2><?= $profile['profile']['firstName'] . ' ' . $profile['profile']['lastName'] ?></h2>
                            <h6><?= $profile['profile']['summary'] ?></h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p><img src="assets/images/im.jpg" alt=""></p>
                    </div>
                    <div class="col-md-8">
                        <h5>My Skills</h5>
                        <?php require('modules/skills.php') ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profile end-->

        <!-- Resume-->
        <section class="module module-gray" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="m-title c-align">
                            <h2>Resume</h2>
                            <h6>My education and experience</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="timeline">
                            <?php require('modules/resume.php') ?>
                            <div class="timeline-top"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Resume end-->

        <!-- Contact-->
        <section class="module" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="m-title c-align">
                            <h2>Let's talk</h2>
                            <h6>Drop me a line to
                                <span class="badge badge-pill badge-dark"><strong>me at jarivas.work</strong></span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact end-->

    </div>
    <!-- Wrapper end-->

    <!-- Scripts-->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    </body>
</html>