<?php


    include "config.php";


?>


<!DOCTYPE html>
<html>

<head dir="ltr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



    <title>NY Portfolio</title>
    <meta name="description"
        content="Je m'appelle Naoufal, je suis un developpeur web promotteur, HTML CSS JVSCRIPT et PHP sont mes outils pour créer developper et fasciner des sites web.">
    <meta name="keywords"
        content="Developpeur Web, Création des sites web, service web, responsive designe, service de designe">
</head>

<body>

    <section id="home">
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top navbar-color shrink">
            <div class="container menu">
                <a href="index.html" class="navbar-brand"><img src="image/image.png" alt="logo" height="40"
                        width="40"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcollapse">

                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item ml-auto">
                            <a href="index.php"
                                class="nav-link font-effect-shadow-multiple mr-4"><?php echo $lang['Accueil'] ?></a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a href="#About" class="nav-link mr-4"><?php echo $lang['À Propos'] ?></a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a href="#work" class="nav-link mr-4"><?php echo $lang['Projets'] ?></a>
                        </li>

                        <li class="nav-item ml-auto">
                            <a href="#contact" class="nav-link mr-4"><?php echo $lang['Contact'] ?></a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <h1 class="text-white text-center "> <?php echo $lang['title'] ?></h1>
        <div class="container d-flex justify-content-center">

            <div class="row text">
                <div class="col" id="typed-strings">
                    <h4 class="text-white"><span class="textp"> </span></h4>
                    <br>
                </div>
                <span id="typed"> </span>
            </div>
        </div>
    </section>


    <!-- cart-about -->
    <section id="About" class="about-mf sect-pt4 route" data-aos="fade-up-right">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="image/img1.png" class="img-fluid rounded photo"
                                                alt="photo de naoufal">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info info">
                                            <p><span class="title-s"><?php echo $lang['fullname'] ?></span> <span
                                                    class="info">Naoufal YASSIRI</span></p>
                                            <p><span class="title-s"><?php echo $lang['profile'] ?></span> <span
                                                    class="info">Developpeur Fullstuck</span></p>
                                            <p><span class="title-s"><?php echo $lang['mail'] ?></span> <span
                                                    class="info">naoufal.yassiri@gmail.com</span></p>
                                            <p><span class="title-s"><?php echo $lang['phone'] ?> </span> <span
                                                    class="info">+212 634 229 932</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title"><?php echo $lang['skills'] ?></p>
                                    <span>HTML</span> <span class="pull-right">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated prog" role="progressbar"
                                            style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <span>CSS3</span> <span class="pull-right">65%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated prog" role="progressbar"
                                            style="width: 65%" aria-valuenow="-5" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <span>PHP</span> <span class="pull-right">55%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated prog" role="progressbar"
                                            style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <span>JAVASCRIPT</span> <span class="pull-right">60%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated prog" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <span>SQL</span> <span class="pull-right">65%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated prog" role="progressbar"
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            <?php echo $lang['moi'] ?>
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        <?php echo $lang['nom'] ?> </p>
                                    <p class="lead">
                                        <?php echo $lang['eye'] ?> </p>
                                    <p class="lead">
                                        <?php echo $lang['hobbies'] ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            <?php echo $lang['folio'] ?>
                        </h3>
                        <p class="subtitle-a">
                            <?php echo $lang['foliotext'] ?>
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up-right">
                    <div class="work-box">

                        <div class="work-img">
                            <img src="image/img2.png" alt="projet" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title"> <a href="https://github.com/NFLgunCode/Clock-Project"
                                            target="_blank"> <?php echo $lang['project horloge'] ?></a></h2>
                                    <div class="w-more">
                                        <span class="w-ctegory tech">HTML CSS JS</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up-right">
                    <div class="work-box">
                        <div class="work-img">
                            <img src="image/img3.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title"><a href="https://github.com/NFLgunCode/Drum-Kit-Project"
                                            target="_blank"><?php echo $lang['Projet Kits de Batterie'] ?></a></h2>
                                    <div class="w-more">
                                        <span class="w-ctegory tech">HTML CSS JS</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up-right">
                    <div class="work-box">

                        <div class="work-img">
                            <img src="image/img4.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title"><a href="https://github.com/NFLgunCode/Video-Project"
                                            target="_blank">
                                            <?php echo $lang['Projet Lecteur Video personnalisé'] ?></a></h2>
                                    <div class="w-more">
                                        <span class="w-ctegory tech">HTML5 CSS3 JS</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up-right">
                    <div class="work-box">
                        <div class="work-img">
                            <img src="image/img6.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title"> <a href="https://github.com/NFLgunCode/Donuts-Project"
                                            target="_blank"><?php echo $lang['SITE WEB Donuts'] ?></a></h2>
                                    <div class="w-more">
                                        <span class="w-ctegory tech">HTML5 CSS3</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up-right">
                    <div class="work-box">
                        <div class="work-img">
                            <img src="image/image5.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title"><a href="https://github.com/NFLgunCode/HTML-CSS-Training"
                                            target="_blank"> <?php echo $lang['Feuille d\'ingrédients'] ?></a> </h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">HTML5 CSS3</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up-right">
                    <div class="work-box">
                        <div class="work-img">
                            <img src="image/img8.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title"><a href="https://github.com/NFLgunCode/Blur-Project"
                                            target="_blank"> <?php echo $lang['Projet effet de Flou'] ?></a></h2>
                                    <div class="w-more">
                                        <span class="w-ctegory tech">HTML5 CSS3 JS</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url(image/background-contact.jpg)">
        <div class="overlay-mf"></div>
        <div class="container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            <?php echo $lang['me contacte'] ?>
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="main.php" method="post" role="form" class="contactForm">
                                            <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>
                                            <div id="errormessage"></div> -->
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="Votre Nom" data-rule="minlen:4"
                                                            data-msg="Please enter at least 4 chars" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Votre Mail" data-rule="email"
                                                            data-msg="Please enter a valid email" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="Sujet" data-rule="minlen:4"
                                                            data-msg="Please enter at least 8 chars of subject" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"
                                                            data-rule="required"
                                                            data-msg="Please write something for us"
                                                            placeholder="Message"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="button button-a button-big button-rouded"
                                                        name="submit">Envoyer Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            <?php echo $lang['entrer'] ?>
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            <?php echo $lang['ambition'] ?>
                                        </p>
                                        <ul class="list-icon p-0">
                                            <li><span class="fas fa-map-marker-alt mr-3"></span>Qu Mohammadi Grp la
                                                Grande MOSQUEE Rue 2 N° 2</li>
                                            <li><span class="fas fa-phone mr-3"></span> +212 634 229 932</li>
                                            <li><span class="fas fa-envelope mr-3"></span>naoufal.yassiri@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul class="social p-0">
                                            <li><a href="https://www.facebook.com/naoufaly"><span class="ico-circle "><i
                                                            class="fab fa-facebook fa-1x"></i></span></a></li>
                                            <li><a href="https://github.com/NFLgunCode"><span class="ico-circle pl-4"><i
                                                            class="fab fa-github fa-1x"></i></span></a></li>
                                            <li><a href="https://gitlab.com/NaoufalCoder?nav_source=navbar"><span
                                                        class="ico-circle pl-4"><i
                                                            class="fab fa-gitlab fa-1x"></i></span></a></li>
                                            <li><a href="https://www.linkedin.com/in/naoufal-yassiri/"><span
                                                        class="ico-circle pl-4"><i
                                                            class="fab fa-linkedin-in fa-1x"></i></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="btn-group" class="mybtn"
            style="width: 35px; position: fixed !important;left: 0;bottom: 0;z-index:1030; ">
            <button type="button" class="btn"> Langues</button>
            <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="sr-only"></span>
            </button>
            <div class="dropdown-menu b1">
                <a class="dropdown-item" href="http://localhost/portfolio/?lang=FR">
                    <?php echo $lang['lang_fr'] ?></a>
                <a class="dropdown-item" href="http://localhost/portfolio/?lang=EN">
                    <?php echo $lang['lang_en'] ?></a>
            </div>
        </div>





    </section>












    <!-- shrink function -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- AOS animation     -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- animation AOS -->
    <script>
    AOS.init();
    </script>

    <!-- typed function -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

    <!-- mon code js -->
    <script src='<?php echo "script/". $lang['script'] ?>'></script>

    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js "
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js "
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js "
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous ">
    </script>
</body>

</html>