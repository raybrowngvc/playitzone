<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="TV shows, movies, entertainment news, reviews, new releases, film reviews, TV series, streaming, behind-the-scenes, interviews, recommendations, Play It Zone" />
    <meta name="description" content="Discover the latest TV shows and movies with Play It Zone. Get in-depth reviews, release updates, exclusive interviews, and personalized recommendations. Dive into a world of entertainment now!" />
    <meta name="author" content="Play It Zone" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us - Play It Zone</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- CSS bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--  Style -->
    <link rel="stylesheet" href="css/style.css" />
    <!--  Responsive -->
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>

    <!--=========== Loader =============-->
    <div id="gen-loading">
        <div id="gen-loading-center">
            <img src="images/logo-1.png" alt="loading">
        </div>
    </div>
    <!--=========== Loader =============-->

    <!--========== Header ==============-->
    <?php
    include "header.php";
    ?>
    <!--========== Header ==============-->

    <!-- breadcrumb -->
    <div class="gen-breadcrumb" style="background-image: url('images/background/asset-25.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                                contact us
                            </h1>
                        </div>
                        <div class="gen-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i
                                            class="fas fa-home mr-2"></i>Home</a></li>
                                <li class="breadcrumb-item active">contact us</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- Icon-Box Start -->
    <section class="gen-section-padding-3">
        <div class="container container-2">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="gen-icon-box-style-1">
                        <div class="gen-icon-box-icon">
                            <span class="gen-icon-animation">
                                <i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <div class="gen-icon-box-content">
                            <h3 class="pt-icon-box-title mb-2">
                                <span>Our Location</span>
                            </h3>
                            <p class="gen-icon-box-description">Leopoldstraße 77, Berlin Friedrichsfelde, Germany</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-4 mt-md-0">
                    <div class="gen-icon-box-style-1">
                        <div class="gen-icon-box-icon">
                            <span class="gen-icon-animation">
                                <i class="fas fa-phone-alt"></i></span>
                        </div>
                        <div class="gen-icon-box-content">
                            <h3 class="pt-icon-box-title mb-2">
                                <span>call us at</span>
                            </h3>
                            <p class="gen-icon-box-description">+49 0 3029 0579</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 mt-4 mt-xl-0">
                    <div class="gen-icon-box-style-1">
                        <div class="gen-icon-box-icon">
                            <span class="gen-icon-animation">
                                <i class="far fa-envelope"></i></span>
                        </div>
                        <div class="gen-icon-box-content">
                            <h3 class="pt-icon-box-title mb-2">
                                <span>Mail us</span>
                            </h3>
                            <p class="gen-icon-box-description">info@playitzone.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Icon-Box End -->

    <!-- Map Start -->
    <Section class="gen-section-padding-3 gen-top-border">
        <div class="container container-2">
            <div class="row">
                <div class="col-xl-6">
                    <h2 class="mb-5">get in touch</h2>
                    <form class="form-contact contact_form" action="mail.php" method="post" >
                            <div class="row mt-4">
                                
                                <div class="col-sm-6 mb-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name"  type="text" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" type="text" placeholder="Enter Phone No.">
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" type="text" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="submit" class="button-fill-primary">Send</button>
                            </div>
                        </form>
                </div>
                <div class="col-xl-6">
                    <div style="width: 100%">
                        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Leopoldstra%C3%9Fe%2077,%20Berlin%20Friedrichsfelde,%20Germany+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <!-- Map End -->

    <!-- footer start -->
    <?php
    include "footer.php";
    ?>
    <!-- footer End -->

    <!-- Back-to-Top start -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- Back-to-Top end -->

    <!-- js-min -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/asyncloader.min.js"></script>
    <!-- JS bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl-carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- counter-js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- popper-js -->
    <script src="js/popper.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Iscotop -->
    <script src="js/isotope.pkgd.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/slick.min.js"></script>

    <script src="js/Play It Zone-core.js"></script>

    <script src="js/script.js"></script>


</body>


<!-- Mirrored from template.gentechtreedesign.com/html/Play It Zone/red-html/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2024 05:47:08 GMT -->
</html>