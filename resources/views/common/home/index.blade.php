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
                        <img src="/frontend/img/logo.jpeg" height="110" alt=""/>
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
                        <a href="#rules">নিয়মাবলী </a>
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
                    <a href="#vote" class="boxed-btn btn-sanatory">
                        ভোট দিন
                        <i class="icon-paper-plan"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar area end -->
</div>

<section class="slider">
    <div class="container">
        <div class="">
            <img src="/frontend/img/hero.png" class="w-100" alt="slider"/>
        </div>
    </div>

</section>

<!-- Our party section end -->
<div class="our-party-section-area party-member-section-area home-three" id="vote">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="party-single-item party-member">
                    <div class="content">
                        <div class="subtitle wow animate__ animate__fadeInUp animated"
                             style="visibility: visible; animation-name: fadeInUp;" ng-click="player(1)">
                            <p>আপনার চোখে ২০২২ সালের বর্ষসেরা ক্রীড়াবিদ কে?</p>
                        </div>
                        <p class=" wow animate__ animate__fadeInUp animated"
                           style="visibility: visible; animation-name: fadeInUp;" ng-click="player(1)">
                            সেরা ৬ ক্রীড়াবিদের মধ্য থেকে হবে পাঠকের ভোটে বর্ষসেরা ক্রীড়াবিদ নির্বাচন। আপনার পছন্দের
                            খেলোয়াড় পছন্দ করে ভোট দিন
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-6 ">

                <div class="single-party-member-item-02 wow animate__ animate__fadeInUp animate__delay-2s animated"
                     style="visibility: visible; animation-name: fadeInUp;" ng-click="player(1)">
                    <div class="thumb">
                        <img src="/frontend/img/jamal.jpg" alt="" class="w-100">
                    </div>
                    <div class="content2">
                        <div class="author-meta">
                            <h6 class="author-name">জামাল ভূইয়া</h6>

                        </div>
                    </div>

                    <div class="check" id="check1">
                        <img src="/frontend/img/check-circle.svg">
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-6 ">

                <div class="single-party-member-item-02 wow animate__ animate__fadeInUp animate__delay-2s animated"
                     style="visibility: visible; animation-name: fadeInUp;" ng-click="player(2)">
                    <div class="thumb">
                        <img src="/frontend/img/sabina.jpg" alt="" class="w-100">
                    </div>
                    <div class="content2">
                        <div class="author-meta">
                            <h6 class="author-name">সাবিনা খাতুন</h6>

                        </div>
                    </div>

                    <div class="check" id="check2">
                        <img src="/frontend/img/check-circle.svg">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-6 ">

                <div class="single-party-member-item-02 wow animate__ animate__fadeInUp animate__delay-2s animated"
                     style="visibility: visible; animation-name: fadeInUp;" ng-click="player(3)">
                    <div class="thumb">
                        <img src="/frontend/img/sakib.jpg" alt="" class="w-100">
                    </div>
                    <div class="content2">
                        <div class="author-meta">
                            <h6 class="author-name">সাকিব আল হাসান</h6>

                        </div>
                    </div>

                    <div class="check" id="check3">
                        <img src="/frontend/img/check-circle.svg">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-6 ">

                <div class="single-party-member-item-02 wow animate__ animate__fadeInUp animate__delay-2s animated"
                     style="visibility: visible; animation-name: fadeInUp;" ng-click="player(4)">
                    <div class="thumb">
                        <img src="/frontend/img/sanjida.jpg" alt="" class="w-100">
                    </div>
                    <div class="content2">
                        <div class="author-meta">
                            <h6 class="author-name">সানজিদা আখতার</h6>

                        </div>
                    </div>

                    <div class="check" id="check4">
                        <img src="/frontend/img/check-circle.svg">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-6 ">

                <div class="single-party-member-item-02 wow animate__ animate__fadeInUp animate__delay-2s animated"
                     style="visibility: visible; animation-name: fadeInUp;" ng-click="player(5)">
                    <div class="thumb">
                        <img src="/frontend/img/liton.jpg" alt="" class="w-100">
                    </div>
                    <div class="content2">
                        <div class="author-meta">
                            <h6 class="author-name">লিটন দাস</h6>

                        </div>
                    </div>

                    <div class="check" id="check5">
                        <img src="/frontend/img/check-circle.svg">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-6 ">

                <div class="single-party-member-item-02 wow animate__ animate__fadeInUp animate__delay-2s animated"
                     style="visibility: visible; animation-name: fadeInUp;" ng-click="player(6)">
                    <div class="thumb">
                        <img src="/frontend/img/miraj2.jpg" alt="" class="w-100">
                    </div>
                    <div class="content2">
                        <div class="author-meta">
                            <h6 class="author-name">মেহেদী হাসান মিরাজ</h6>

                        </div>
                    </div>

                    <div class="check" id="check6">
                        <img src="/frontend/img/check-circle.svg">
                    </div>
                </div>

            </div>
        </div>

        <div class="row" id="vote-start">
            <div class="btn-wrapper vote-btn">
                <button class="boxed-btn btn-sanatory" ng-click="voteStart()">
                    ভোট দিন
                    <i class="fas fa-vote-yea"></i>
                </button>
            </div>
        </div>

        <div class="btn-wrapper vote-btn" id="vote-count" style="display: none">

            <div class="row contact-form contact-bg">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="text" name="name" ng-model="name" placeholder="পুরো নাম" class="form-control"
                               required=""
                               aria-required="true">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="tel" name="phone" ng-model="phone" placeholder="মোবাইল নম্বর" class="form-control"
                               required=""
                               aria-required="true">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <button class="boxed-btn btn-sanatory" ng-click="voteCount()">
                        ভোট দিন
                        <i class="fas fa-vote-yea"></i>
                    </button>
                </div>
            </div>


        </div>
    </div>
</div>

@if(count($news)>0)
    @include("common.home.news")
@endif
@if(count($videos)>0)
    @include("common.home.video")
@endif

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

<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function ($scope, $http) {

        $scope.option = "";
        document.getElementById("check1").style.display = "none";
        document.getElementById("check2").style.display = "none";
        document.getElementById("check3").style.display = "none";
        document.getElementById("check4").style.display = "none";
        document.getElementById("check5").style.display = "none";
        document.getElementById("check6").style.display = "none";

        $scope.voteStart = function () {
            document.getElementById("vote-start").style.display = "none";
            document.getElementById("vote-count").style.display = "block";
        };
        $scope.voteCount = function () {

            console.log($scope.option);
            if ($scope.option === "" || $scope.name === "" || $scope.phone === "") {

                Swal.fire({
                    icon: 'error',
                    title: 'সব ইনপুট ফিল্ড পূরণ করুন ',
                    showConfirmButton: false,
                    timer: 1500
                })
                return;
            }

            $http.post('/save-option', {
                option: $scope.option,
                name: $scope.name,
                phone: $scope.phone,
                _token: '{{ csrf_token() }}',
            }).then(function success(e) {

                console.log(e.data.status_code);
                console.log(e.data.message);

                if (e.data.status_code === 200) {
                    Swal.fire({
                        icon: 'success',
                        title: e.data.message,
                        showConfirmButton: false,
                        timer: 1500
                    })

                    window.location.href = "/success";
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: e.data.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }


            }, function error(error) {

                console.log("Failed");
                Swal.fire({
                    icon: 'error',
                    title: "একটি সমস্যা হয়েছে অনুগ্রহ করে পরে আবার চেষ্টা করুন",
                    showConfirmButton: false,
                    timer: 1500
                })
            });

        };
        $scope.player = function (id) {
            $scope.option = id;
            if (id === 1) {
                document.getElementById("check1").style.display = "block";
                document.getElementById("check2").style.display = "none";
                document.getElementById("check3").style.display = "none";
                document.getElementById("check4").style.display = "none";
                document.getElementById("check5").style.display = "none";
                document.getElementById("check6").style.display = "none";
            } else if (id === 2) {
                document.getElementById("check1").style.display = "none";
                document.getElementById("check2").style.display = "block";
                document.getElementById("check3").style.display = "none";
                document.getElementById("check4").style.display = "none";
                document.getElementById("check5").style.display = "none";
                document.getElementById("check6").style.display = "none";
            } else if (id === 3) {
                document.getElementById("check1").style.display = "none";
                document.getElementById("check2").style.display = "none";
                document.getElementById("check3").style.display = "block";
                document.getElementById("check4").style.display = "none";
                document.getElementById("check5").style.display = "none";
                document.getElementById("check6").style.display = "none";
            } else if (id === 4) {
                document.getElementById("check1").style.display = "none";
                document.getElementById("check2").style.display = "none";
                document.getElementById("check3").style.display = "none";
                document.getElementById("check4").style.display = "block";
                document.getElementById("check5").style.display = "none";
                document.getElementById("check6").style.display = "none";
            } else if (id === 5) {
                document.getElementById("check1").style.display = "none";
                document.getElementById("check2").style.display = "none";
                document.getElementById("check3").style.display = "none";
                document.getElementById("check4").style.display = "none";
                document.getElementById("check5").style.display = "block";
                document.getElementById("check6").style.display = "none";
            } else {
                document.getElementById("check1").style.display = "none";
                document.getElementById("check2").style.display = "none";
                document.getElementById("check3").style.display = "none";
                document.getElementById("check4").style.display = "none";
                document.getElementById("check5").style.display = "none";
                document.getElementById("check6").style.display = "block";
            }

        }
    });
</script>


</body>


</html>
