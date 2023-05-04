<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Prothom Alo Quiz</title>
    <!-- favicon -->
    <link rel="icon" href="/frontend/img/favicon.png" sizes="20x20" type="image/png"/>
    <!-- animate -->
    <link rel="stylesheet" href="/frontend/assets/css/animate.css"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css"/>
    <!-- magnific popup -->

    <!--    <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.css"/>
        <link rel="stylesheet" href="/frontend/assets/css/owl.carousel.min.css"/>
        <link rel="stylesheet" href="/frontend/assets/css/hover-min.css"/>-->

    <link rel="stylesheet" href="/frontend/assets/css/font-awesome.min.css"/>


    <link rel="stylesheet" href="/frontend/assets/css/iconmoon.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/frontend/assets/css/style.css"/>
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="/frontend/assets/css/responsive.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .contact-form .form-group .form-control {
            border-radius: 5px;
        }
    </style>

</head>

<body ng-app="myApp" ng-controller="myCtrl">
<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="loader">
            <svg
                id="eJPpT6qIRLO1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 41 52"
                shape-rendering="geometricPrecision"
                text-rendering="geometricPrecision"
            >
                <g id="eJPpT6qIRLO2" transform="matrix(1 0 0 1 -219 -96.817001)">
                    <g id="eJPpT6qIRLO3" transform="matrix(1 0 0 1 219.111 139.233001)">
                        <path
                            id="eJPpT6qIRLO4"
                            d="M117.617,183.55L118.923,187.05L122.66,187.209L119.73,189.534L120.73,193.134L117.613,191.067L114.496,193.134L115.496,189.534L112.567,187.209L116.304,187.05Z"
                            transform="matrix(1 0 0 1 -112.573997 -183.550003)"
                            opacity="0"
                            fill="rgb(221,19,26)"
                            stroke="none"
                            stroke-width="1"
                        />
                        <path
                            id="eJPpT6qIRLO5"
                            d="M117.617,183.55L118.923,187.05L122.66,187.209L119.73,189.534L120.73,193.134L117.613,191.067L114.496,193.134L115.496,189.534L112.567,187.209L116.304,187.05Z"
                            transform="matrix(1 0 0 1 -97.171997 -183.550003)"
                            opacity="0"
                            fill="rgb(221,19,26)"
                            stroke="none"
                            stroke-width="1"
                        />
                        <path
                            id="eJPpT6qIRLO6"
                            d="M117.617,183.55L118.923,187.05L122.66,187.209L119.73,189.534L120.73,193.134L117.613,191.067L114.496,193.134L115.496,189.534L112.567,187.209L116.304,187.05Z"
                            transform="matrix(1 0 0 1 -81.771004 -183.550003)"
                            opacity="0"
                            fill="rgb(221,19,26)"
                            stroke="none"
                            stroke-width="1"
                        />
                    </g>
                    <path
                        id="eJPpT6qIRLO7"
                        d="M6238.076,2712.141L6238.076,2692.616L6201.827,2692.616L6201.827,2715.847L6208.336,2715.847L6208.336,2699.125L6231.567,2699.125L6231.567,2705.633L6214.843,2705.633L6214.843,2722.356L6201.826,2722.356L6201.826,2728.865L6221.351,2728.865L6221.351,2716.743L6233.472,2728.865L6238.072,2728.865L6238.072,2724.265L6227.532,2713.725L6225.949,2712.144Z"
                        transform="matrix(1 0 0 1 -5980.451 -2595.798999)"
                        fill="rgb(221,19,26)"
                        fill-rule="evenodd"
                        stroke="none"
                        stroke-width="1"
                    />
                </g>
            </svg>
        </div>
    </div>
</div>
<!-- preloader area end -->


<div class="header-style-01">
    <!-- support bar area end -->
    <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="/" class="logo">
                        <img src="/frontend/img/logo.png" alt=""/>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <li class="current-menu-item">
                        <a href="/">হোম </a>
                    </li>


                    <li>
                        <a href="/#rules">নিয়মাবলী </a>
                        <div class="line">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot style-02"></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="nav-right-content">

                <div class="btn-wrapper">
                    <a href="/#vote" class="boxed-btn btn-sanatory">
                        ভোট দিন
                        <i class="icon-paper-plan"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar area end -->
</div>

<div class="about-us-section-area about-bg" style="background-image: url(/frontend/assets/img/about-bg.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-10">
                <div class="about-inner news">
                    <h1 class="title">ভোট গ্রহণ সম্পন্ন </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="issues-around-us-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <h4 class="title">আপনার ভোট গ্রহণ করা হয়েছে </h4>
                    <p class="description wow animate__ animate__fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">
                        ফলাফল জানতে প্রথম আলোর পেজে নজর রাখুন
                    </p>

                    <div class="btn-wrapper vote-btn " style="    text-align: center;">
                        <a href="/" class="boxed-btn btn-sanatory" ng-click="voteStart()">
                            হোমপেজে ফিরে যান
                            <i class="fas fa-home"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<!-- footer area start -->
<footer class="footer-area line-bg" style="background-image: url(/frontend/assets/img/line.png);">
    <div class="footer-top issue style-01">
        <div class="container">
            <!-- <div class="footer-top-border padding-bottom-60 padding-top-75">
                 <div class="row">
                     <div class="col-lg-6 col-md-6">
                         <div class="footer-widget widget">
                             <div class="about_us_widget wow animate__animated animate__fadeInUp">
                                 <p>President represented Delaware for 36 years in the U.S. Senate before becoming the
                                     47th Vice
                                     President of the United States.</p>
                                 <div class="social-links">
                                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                                     <a href="#"><i class="fab fa-twitter"></i></a>
                                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                     <a href="#"><i class="fab fa-youtube"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                         <p class="text-white">প্রগতি ইনস্যুরেন্স ভবন, ২০-২১ কারওয়ান বাজার, ঢাকা ১২১৫।
                             ফোন: ৮১৮০০৭৮-৮১</p>
                     </div>

                 </div>
             </div>-->

            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-area-inner">
                                © কপিরাইট ২০২১ প্রথম আলো ডিজিটাল
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- News Section End -->
<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<script src="/frontend/assets/js/jquery-2.2.4.min.js"></script>
<!-- bootstrap -->
<script src="/frontend/assets/js/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="/frontend/assets/js/jquery.magnific-popup.js"></script>
<!-- wow -->
<script src="/frontend/assets/js/wow.min.js"></script>
<!-- owl carousel -->
<!--<script src="/frontend/assets/js/owl.carousel.min.js"></script>

<script src="/frontend/assets/js/waypoints.min.js"></script>

<script src="/frontend/assets/js/jquery.counterup.min.js"></script>

<script src="/frontend/assets/js/jquery.countdown.min.js"></script>-->
<!-- main js -->
<script src="/frontend/assets/js/main.js"></script>

</body>


</html>
