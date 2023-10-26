<?php 
   
   include "header2.php";


 ?>

   <?php 
   
   include "aside1.php";


 ?>

   
    

    <!-- cart list -->
    <aside class="cart-bar-wrapper">
        <div class="cart-bar__close">
            <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
        <div class="cart-bar">
            <h4 class="cart-bar__title">Cart Items - <span>4</span></h4>
            <div class="cart-bar__lists">
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-1.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">₹19.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-2.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">₹36.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-3.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">₹20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-4.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">₹20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
                <span>Sub Total:</span>
                <span>₹87.00</span>
            </div>
            <div class="btns d-flex align-items-center justify-content-center">
                <a href="cart.html" class="site-btn">View Cart</a>
                <a href="checkout.html" class="site-btn site-btn__borderd">Checkout</a>
            </div>
        </div>
    </aside>
    <div class="overlay"></div>

    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg" data-overlay="dark" data-opacity="5">
            <div class="shape shape__1"><img src="assets/images/shape/breadcrumb-shape-1.png" alt=""></div>
            <div class="shape shape__2"><img src="assets/images/shape/breadcrumb-shape-2.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">ROYAL menu</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="index.php"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>menu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- populer menu area start -->
        <section class="popular-menu__area position-relative pb-120 pt-115">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-40">
                            <span class="sub-title">menu</span>
                            <h2 class="title">Our Popular Menu</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="popular-menu__wrapper m-auto d-inline-block">
                            <div class="popular-menu__filter d-flex justify-content-center align-items-center mb-45">
                                <button class="active" data-filter="*">All</button>
                                <button data-filter=".cat1">chocolate</button>
                                <button data-filter=".cat2">coffee</button>
                                <button data-filter=".cat3">sandwiches</button>
                                <button data-filter=".cat4">sweets</button>
                                <button data-filter=".cat5">Black tea</button>
                                <button data-filter=".cat6">Grean Tea</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="popular-menu-grid-2" class="row popular-menu__grid popular-menu__lists mt-none-30">
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-sizer"></div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 cat2 cat3 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-1.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect "><a href="#0">Americano Rosted Coffee</a></h3>
                                <span class="price">₹1200.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 cat3 cat4 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-2.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">JAPANIS COFFEE GRED</a></h3>
                                <span class="price">₹1000.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat2 cat5 cat6 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-3.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">CAFÈ AU LAIT Coffee</a></h3>
                                <span class="price">₹1000.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 cat4 cat3 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-4.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">ESPRESSO RISTRETTO Coffee</a></h3>
                                <span class="price">₹1200.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat2 cat5 cat6 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-5.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">VIRGIN COFFEE GRED</a></h3>
                                <span class="price">₹800.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 cat5 cat6 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-6.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">ESPRESSO RISTRETTO Coffee</a></h3>
                                <span class="price">₹1200.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat2 cat3 cat4 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-1.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">BRAZIL COFFEE GRED</a></h3>
                                <span class="price">₹1230.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 cat5 cat6 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-2.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">ESPRESSO RISTRETTO BEANS</a></h3>
                                <span class="price">₹1100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat2 cat3 cat4 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-3.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">CAFFÈ LATTE BEANS</a></h3>
                                <span class="price">₹900.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 cat5 cat6 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-4.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">Turkish Rosted Coffee</a></h3>
                                <span class="price">₹800.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat2 cat3 cat4 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-5.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">Bangladeshi Rosted Coffee</a></h3>
                                <span class="price">₹600.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 cat5 cat6 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-6.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="#0">indian Rosted Coffee</a></h3>
                                <span class="price">₹800.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <a href="#0" class="site-btn mt-60">load more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- populer menu area end -->

    </main>

  <div class="footer__top footer__top--3 pt-155 position-relative">
            <a href="#" class="go-top position-absolute d-flex align-items-center justify-content-center">
                <i class="fal fa-long-arrow-up"></i>
                <span>go to top</span>
            </a>
            <div class="container">
                <div class="row justify-content-center mt-none-30">
                    <div class="col-xl-3 col-lg-6 mt-30">
                        <div class="footer__widget footer__info">
                            <div class="item d-flex align-items-center justify-content-center">
                                <img src="assets/images/icons/ft-phone.png" alt="">
                                <span>Phone :</span>
                                <a href="tel:88019339702520">+91 8530 611 363</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mt-30 pl-55">
                        <div class="footer__widget footer__info">
                            <div class="item d-flex align-items-center justify-content-start">
                                <img src="assets/images/icons/ft-map-marker.png" alt="">
                                <span>Address :</span>
                                <p> hatid tal-sangola</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-8 mt-30 pl-55">
                        <div class="footer__widget">
                            <div class="subscribe">
                                <form action="https://xpressrow.com/html/Royal/Royal/index.php">
                                    <input type="email" name="email" id="email" placeholder="Enter your email">
                                    <button type="submit" class="subscribe__btn">Subscribe <i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__middle mt-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="footer__logo--content">
                           
                            <img class="mb-15 " src="assets/images/logo/royal12.png" alt="">
                     
                            <p>ROYAL CAFE @2023 ALL RIGHT RESERVED</p>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-end">
                        <div class="social-links d-flex align-items-center justify-content-lg-end">
                            <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--========= JS Here =========-->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrollwatch.js"></script>
    <script src="assets/js/sticky-header.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
    <script src="assets/js/jquery-ui-slider-range.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from xpressrow.com/html/cafena/cafena/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 11:05:19 GMT -->
</html>