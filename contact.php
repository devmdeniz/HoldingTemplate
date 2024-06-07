<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php
    include("./sections/head.php");
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link rel="stylesheet" href="css/vendors.min.css">
    <link rel="stylesheet" href="css/icon.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/responsive.min.css">
    <link rel="stylesheet" href="demos/corporate/corporate.css">
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
    <div class="box-layout">
        <?php
        include("./sections/header.php");
        ?>
        <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-corporate-customer-blog-bg.jpg)">
            <div class="opacity-extra-medium bg-blue-whale"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-lg-8 position-relative text-center page-title-extra-large" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Bizimle İletişime Geçin</h1>
                    </div>
                    <div class="down-section text-center" data-anime="{ &quot;translateY&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <a href="#down-section" class="section-link">
                            <div class="text-white">
                                <i class="feather icon-feather-chevron-down icon-very-medium"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section id="down-section">
            <div class="container">
                <div class="row align-items-end justify-content-center mb-6 text-center text-lg-start sm-mb-8">
                    <div class="col-xl-5 col-lg-7 col-md-10 md-mb-25px" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;:0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Yardımcı olmak istiyoruz.</span>
                        <h3 class="text-dark-gray fw-700 ls-minus-1px mb-0">Bizimle iletişime geçin!</h3>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-5 col-md-10 last-paragraph-no-margin">
                        <p class="w-90 lg-w-100" data-anime="{ &quot;el&quot;: &quot;lines&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;:0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">Sonunda bizimle iletişime geçmeye karar verdin. Buna pişman olmayacaksın :)</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 mb-6 sm-mb-8" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;:0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="col md-mb-30px text-center text-sm-start">
                        <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-mail d-inline-block icon-small me-10px"></i>Mail Atmaya Ne Dersin?</span>
                        <a href="mailto:deniz@dikholding.com"><span class="__cf_email__">deniz@dikholding.com</span></a><br>
                        <a href="mailto:deniz@dikholding.com"><span class="__cf_email__">iletisim@dikholding.com</span></a>
                    </div>
                    <div class="col xs-mb-30px text-center text-sm-start">
                        <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-phone d-inline-block icon-small me-10px"></i>Aramaya Ne Dersin?</span>
                        <a href="tel:1800222000">+90 500 000 00 00</a><br>
                    </div>
                    <div class="col text-center text-sm-start">
                        <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-users d-inline-block icon-small me-10px"></i>LinkedIn de olur.</span>
                        <a href="https://linkedin.com/in/mehmetdenizkumcu"><span class="__cf_email__">Mehmet Deniz Kumcu</span></a><br>
                    </div>
                </div>
            </div>
        </section>


        <?php
        include("./sections/footer.php");
        include("./sections/scroll.php");
        ?>

    </div>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>