@extends('layouts.app')

@section('title', 'Sobre Nós')

@section('content')

    @include('includes.header')

    <!-- Start Header Area -->
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">About Us</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active" aria-current="page">About Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- Start About Top -->
    <div class="about-top">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between d-sm-column">
                <div class="col-md-6">
                    <div class="about-img" data-aos="fade-up" data-aos-delay="0">
                        <div class="img-responsive">
                            <img src="{{ asset('images/about/img-about.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="title">ABOUT OUR HONO STORE</h3>
                        <h5 class="semi-title">We believe that every project existing in digital world is a result of an
                            idea and every idea has a cause.</h5>
                        <p>For this reason, our each design serves an idea. Our strength in design is reflected by our
                            name, our care for details. Our specialist won't be afraid to go extra miles just to
                            approach near perfection. We don't require everything to be perfect, but we need them to be
                            perfectly cared for. That's a reason why we are willing to give contributions at best. Not a
                            single detail is missed out under Billey's professional eyes.The amount of dedication and
                            effort equals to the level of passion and determination. Get better, together as one.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Top -->

    <!-- Start Service Section -->
    <div class="service-promo-section section-top-gap-100">
        <div class="service-wrapper">
            <div class="container">
                <div class="row">
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="image">
                                <img src="{{ asset('images/icons/icon_about1.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">Creative Always</h6>
                                <p>Stay creative with Billey and the huge collection of premade elements, layouts &
                                    effects.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="{{ asset('images/icons/icon_about2.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">Express Customization</h6>
                                <p>Easy to install and configure the theme customization in a few clicks with Billey.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="image">
                                <img src="{{ asset('images/icons/icon_about3.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">Premium Integrations</h6>
                                <p>Integrated premium plugins in Billey is the secret weapon for your business to
                                    thrive.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="image">
                                <img src="{{ asset('images/icons/icon_about4.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">Real-time Editing</h6>
                                <p>Edit your work and preview the changes on the screen live with advanced page builder.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Section -->

    <!--  Start  Team Section    -->
    <div class="team-section section-top-gap-100 secton-fluid section-inner-bg">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content text-center">
                                <h3 class="section-title">Meet Our Team</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Content Text Area -->
        <div class="team-wrapper">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="0">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset('images/team/leader1.png') }}" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Ms. Veronica</h6>
                                <span class="team-title">Web Designer</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="200">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset('images/team/leader2.png') }}" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Missa Santos</h6>
                                <span class="team-title">CEO Founder</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="400">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset('images/team/leader3.png') }}" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Missa Santos</h6>
                                <span class="team-title">Chief Officer</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="600">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset('images/team/leader4.png') }}" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Lisa Antonia</h6>
                                <span class="team-title">CTO</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   End  Team Section   -->



    @include('includes.footer')

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal-add-cart-product-img">
                                            <img class="img-fluid" src="images/product/default/home-1/default-1.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to
                                            cart
                                            successfully!</div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="cart.html">View Cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your
                                            Cart.</strong></li>
                                    <li> <strong>TOTAL PRICE: </strong> <span>$187.00</span></li>
                                    <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">CONTINUE
                                            SHOPPING</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area mb-7">
                                    <!-- Start Large Image -->
                                    <div class="product-large-image modal-product-image-large swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="images/product/default/home-1/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="images/product/default/home-1/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="images/product/default/home-1/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="images/product/default/home-1/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="images/product/default/home-1/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="images/product/default/home-1/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Large Image -->
                                    <!-- Start Thumbnail Image -->
                                    <div
                                        class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid" src="images/product/default/home-1/default-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid" src="images/product/default/home-1/default-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid" src="images/product/default/home-1/default-3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid" src="images/product/default/home-1/default-4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid" src="images/product/default/home-1/default-5.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid" src="images/product/default/home-1/default-6.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="gallery-thumb-arrow swiper-button-next"></div>
                                        <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                    </div>
                                    <!-- End Thumbnail Image -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price"><del>$70.00</del>$80.00</div>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red"
                                                        class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color" id="modal-product-color-light-green"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color" id="modal-product-color-light-blue"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="variable-single-item ">
                                                <span>Quantity</span>
                                                <div class="product-variable-quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </div>

                                            <div class="product-add-to-cart-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalAddcart">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <div class="modal-product-about-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae</p>
                                    </div>
                                    <!-- Start  Product Details Social Area-->
                                    <div class="modal-product-details-social">
                                        <span class="title">SHARE THIS PRODUCT</span>
                                        <ul>
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li><a href="#" class="google-plus"><i
                                                        class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>

                                    </div> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <!-- <script src="js/vendor/modernizr-3.11.2.min.js"></script>
            <script src="js/vendor/jquery-3.5.1.min.js"></script>
            <script src="js/vendor/jquery-migrate-3.3.0.min.js"></script>
            <script src="js/vendor/popper.min.js"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="js/vendor/jquery-ui.min.js"></script>  -->

    <!--Plugins JS-->
    <!-- <script src="js/plugins/swiper-bundle.min.js"></script>
            <script src="js/plugins/material-scrolltop.js"></script>
            <script src="js/plugins/jquery.nice-select.min.js"></script>
            <script src="js/plugins/jquery.zoom.min.js"></script>
            <script src="js/plugins/venobox.min.js"></script>
            <script src="js/plugins/jquery.waypoints.js"></script>
            <script src="js/plugins/jquery.lineProgressbar.js"></script>
            <script src="js/plugins/aos.min.js"></script>
            <script src="js/plugins/jquery.instagramFeed.js"></script>
            <script src="js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="js/vendor/vendor.min.js"></script>
    <script src="js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>
@endsection
