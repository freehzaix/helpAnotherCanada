<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/themify-icon/themify-icons.css" rel="stylesheet">
    <link href="assets/vendors/icomoon/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendors/slick/slick.css" rel="stylesheet">
    <link href="assets/vendors/slick/slick-theme.css" rel="stylesheet">
    <link href="assets/vendors/animation/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <title>Help Another Canada</title>
</head>

<body data-scroll-animation="true">

    <div class="body_wrapper">

        <!-- start header  -->
        <nav class="navbar navbar-expand-lg sticky_nav">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="assets/img/logo_dark.png" alt="logo"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu me-lg-auto ms-lg-auto">
                        <li class="nav-item dropdown submenu">
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
                        <li class="nav-item active"><a class="nav-link" href="/list-annuaire">Annuaires</a></li>
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

        <!-- page breadcrumb area  -->
        <section class="saas_breadcrumb_area" data-bg-color="#F7F6FE">
            <img class="b_shap" src="{{ asset('assets/img/breadcrumb_shap.png') }}" alt="">
            <div class="container">
                <div class="saas_breadcrumb_text">
                    <h1>Annuaire d'entreprise</h1>
                    <p>

                    </p>
                </div>
            </div>
        </section>
        <!-- page breadcrumb area  -->

        <!-- portfolio area  -->
        <section class="portfolio_area portfolio_area_two sec_padding">
            <div class="container">
                <div id="portfolio_filter" class="portfolio_filter mb_50">
                    {{-- <div data-filter="*" class="work_portfolio_item active">All</div>
                    <div data-filter=".br" class="work_portfolio_item">Business</div>
                    <div data-filter=".web" class="work_portfolio_item">Corporate</div>
                    <div data-filter=".fashion" class="work_portfolio_item">Creative</div>
                    <div data-filter=".ux" class="work_portfolio_item">Startup</div> --}}
                </div>

                <div class="row" id="work-portfolio">

                    @foreach ($annuaires as $row)
                        <div class="col-lg-4 col-md-6 item br">
                            <div class="portfolio_item">
                                <a class="portfolio_img">
                                    <img src="{{ $row->logo }}" alt="">
                                </a>
                                <a href="portfolio-single.html">
                                    <h3>{{ $row->nom_entreprise }}</h3>
                                </a>
                                <div class="portfolio_category">
                                    <p>
                                        {{ $row->description }}
                                    </p>
                                    <a href="#">{{ $row->ville }},</a>
                                    <a href="#">{{ $row->pays }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- portfolio area  -->

        <footer class="footer_area_two footer_area_three footer_shap" data-bg-color="#12141D">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="f_widget f_about_widget wow fadeInUp" data-wow-delay="0.2s">
                            <a href="index.html" class="f_logo"><img src="assets/img/home-two/f_logo_w.png"
                                    alt=""></a>
                            <p>Help One Another vous offre les outils dont vous avez besoin pour collaborer, apprendre
                                et grandir. Explorez nos webinaires,
                                rejoignez le portail des membres, ou trouvez des services de confiance dans notre
                                annuaire en ligne.</p>
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
                                by <a href="#0">PicmaticWeb</a></p>
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
    <script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="assets/vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="assets/vendors/wow/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>
