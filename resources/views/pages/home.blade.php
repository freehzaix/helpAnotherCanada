<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendors/themify-icon/themify-icons.css" rel="stylesheet">
    <link href="assets/vendors/icomoon/style.css" rel="stylesheet">
    <link href="assets/vendors/slick/slick.css" rel="stylesheet">
    <link href="assets/vendors/slick/slick-theme.css" rel="stylesheet">
    <link href="assets/vendors/animation/animate.css" rel="stylesheet">
    <link href="assets/vendors/magnify-pop/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <title>Help Another Canada</title>
</head>

<body data-scroll-animation="true">

    <div class="body_wrapper">
        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">
                </div>
                <div class="txt-loading">

                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start header  -->
        <nav class="navbar navbar-expand-lg sticky_nav">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="assets/img/logo_dark.png" alt="logo"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu me-lg-auto ms-lg-auto">
                        <li class="nav-item dropdown submenu active">
                            <a class="nav-link dropdown-toggle" href="/" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="/about" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                A propos
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="/webinaires" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Webinaires
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="/login/membre" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Portail des membres
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="/login/conseil" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Conseil d'administration
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/list-annuaire">Annuaires</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    </ul>

                </div>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>
            </div>
        </nav>
        <!-- End header  -->
        <section class="saas_banner_area" data-bg-color="#F7F8FA">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="saas_banner_content">
                            <h1 class="wow fadeInLeft">Unissons nos forces pour mieux aider</h1>
                            <p class="wow fadeInLeft">
                                Bienvenue sur Help Another, une plateforme dédiée à l'entraide, l'inclusion et le
                                développement de notre communauté.<br />
                                Rejoignez-nous pour accéder à des ressources exclusives et découvrir comment vous pouvez
                                faire une différence.
                            </p>
                            <a href="{{ route('register.membre') }}" class="saas_btn wow fadeInUp"
                                data-wow-delay="0.2s">
                                <div class="btn_text">
                                    Devenir membre
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="saas_banner_img wow fadeInRight" data-wow-delay="0.2s">
                            <img src="assets/img/home-one/dash.png" alt="">
                            <a href="https://www.youtube.com/watch?v=yamnxqywtLI" class="video_popup popup-youtube">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="saas_client_logo_area">
                <h2 class="client_title text-center title-animation">Découvrez les ressources et services de Help One
                    Another</h2>
                <div class="min_client_area">
                    <a href="#" class="item wow fadeInLeft" data-wow-delay="0.3s">
                        <img src="assets/img/home-one/1.png" alt="">
                    </a>
                    <a href="#" class="item wow fadeInLeft" data-wow-delay="0.5s"><img
                            src="assets/img/home-one/2.png" alt=""></a>
                    <a href="#" class="item wow fadeInLeft" data-wow-delay="0.7s"><img
                            src="assets/img/home-one/3.png" alt=""></a>
                    <a href="#" class="item wow fadeInLeft" data-wow-delay="0.9s"><img
                            src="assets/img/home-one/4.png" alt=""></a>
                    <a href="#" class="item wow fadeInLeft" data-wow-delay="1.1s"><img
                            src="assets/img/home-one/5.png" alt=""></a>
                    <a href="#" class="item wow fadeInLeft" data-wow-delay="1.3s"><img
                            src="assets/img/home-one/6.png" alt=""></a>
                    <a href="#" class="item wow fadeInLeft" data-wow-delay="1.5s"><img
                            src="assets/img/home-one/7.png" alt=""></a>
                </div>
            </div>
        </section>


        <section class="saas_features_area">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title-animation">Découvrez les ressources et services de Help One Another</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                        Help One Another vous offre les outils dont vous avez besoin pour collaborer, apprendre et
                        grandir. Explorez nos webinaires, rejoignez le portail des membres, ou trouvez des services de
                        confiance dans notre annuaire en ligne.
                    </p>
                </div>
                <div class="row flex-row-reverse saas_features_item one">
                    <div class="col-lg-6">
                        <div class="saas_features_img" data-bg-color="#E6D8F5">
                            <img src="assets/img/home-one/features_img_one.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="saas_features_content wow fadeInLeft" data-wow-delay="0.2s">
                            <h6>Programmes en Alberta</h6>
                            <h2>Opportunités pour les jeunes</h2>
                            <p>
                                Bâtir la prochaine génération de jeunes leaders, d’employés créatifs et innovants et d’entrepreneurs. Via Youth Opportunities, HOA vise :
                                <ul>
                                    <li>Créer une culture entrepreneuriale pour les jeunes.</li>
                                    <li>Stimuler la création d'un écosystème d'entrepreneuriat qui soutient les jeunes entrepreneurs en Alberta, partout au Canada et dans le monde.</li>
                                    <li>Supprimer les obstacles à l'emploi et au travail indépendant pour les jeunes mal desservis/sous-représentés en les dotant de connaissances et de compétences commercialisables et transférables pour créer leur propre emploi ou des opportunités entrepreneuriales (afin de stimuler la compétitivité et l'emploi).</li>
                                    <li>Enseigner aux jeunes des compétences clés transférables et commercialisables qu’ils n’apprennent pas à l’école, et les aider à transférer les concepts de la salle de classe vers des applications du monde réel.</li>
                                    <li>Plaider auprès des gouvernements, du secteur privé et des groupes d’intérêt civique pour un accès égal aux ressources et aux opportunités, et aller de l’avant avec des politiques stratégiques qui favorisent l’entrepreneuriat des jeunes.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row saas_features_item two">
                    <div class="col-lg-6">
                        <div class="saas_features_img" data-bg-color="#ADDEF0">
                            <img src="assets/img/home-one/analytic_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="saas_features_content wow fadeInRight" data-wow-delay="0.1s">
                            <h6>Devenez un interprète communautaire certifié via HOA</h6>
                            <h2>Pourquoi devenir interprète communautaire ?</h2>
                            <p>
                                Parler couramment l'anglais et une ou plusieurs langues étrangères peut vous permettre de gagner votre vie en aidant à établir une communication entre les immigrants confrontés à des barrières linguistiques et les professionnels et prestataires de services anglophones tels que les agents d'immigration, la police, les tribunaux, les professionnels de la santé, les écoles, etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row flex-row-reverse saas_features_item three">
                    <div class="col-lg-6">
                        <div class="saas_features_img" data-bg-color="#B3F7D5">
                            <img src="assets/img/home-one/Chart.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="saas_features_content wow fadeInLeft" data-wow-delay="0.2s">
                            <h6>Programmes au Burundi</h6>
                            <h2>Programme d'éducation (ESP)</h2>
                            <p>
                                L’ESP vise à autonomiser les enfants et les jeunes burundais en les aidant à accéder à une éducation décente. HOA fournira des fournitures scolaires, des uniformes, du matériel scolaire et d'autres soutiens éducatifs aux enfants dans le besoin qui fréquentent les écoles primaires, secondaires et universitaires.<br />
                                Les jeunes recevront également des connaissances financières et une formation entrepreneuriale dans les écoles.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="footer_area_two footer_area_three footer_shap" data-bg-color="#12141D">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="f_widget f_about_widget wow fadeInUp" data-wow-delay="0.2s">
                            <a href="#" class="f_logo"><img src="assets/img/home-two/f_logo_w.png"
                                    alt=""></a>
                            <p>Help One Another vous offre les outils dont vous avez besoin pour collaborer, apprendre et grandir. Explorez nos webinaires, rejoignez le portail des membres, ou trouvez des services de confiance dans notre annuaire en ligne.</p>
                            <ul class="list-unstyled f_social_icon">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="f_widget f_link_widget wow fadeInUp" data-wow-delay="0.3s">
                            <h3 class="f_title">COMPANY</h3>
                            <ul class="list-unstyled link_widget">
                                <li><a href="/about">A propos</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="team.html">Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget f_link_widget wow fadeInUp" data-wow-delay="0.4s">
                            <h3 class="f_title">HELP</h3>
                            <ul class="list-unstyled link_widget">
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">Delivery Details</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget f_newsletter_widget wow fadeInUp" data-wow-delay="0.5s">
                            <h3 class="f_title">SUBSCRIBE TO NEWSLETTER</h3>
                            <form action="#" class="newsletter_form newsletter_form_two">
                                <input class="form-control" type="text" placeholder="Enter your email">
                                <button type="submit" class="theme_btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="mb-0 wow fadeInUp" data-wow-delay="0.3s">© Copyright 2024, All Rights Reserved
                                by <a href="#0">AP2S Technologie</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/parallax/jquery.parallax-scroll.js"></script>
    <script src="assets/vendors/wow/wow.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SmoothScroll.js"></script>
    <script src="assets/vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>
