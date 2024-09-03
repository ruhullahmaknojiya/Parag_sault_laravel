<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Parag-Sault') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta name="description" content="Ebazar HTML5 Template">

        <title>E-Bazar - Grocery Store Html Template</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/media/favicon-light.png')}}">

        <!-- All CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-266165434-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-266165434-1');
        </script>
    </head>

    <body>

        <div>
            <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="P" class="letters-loading">
                                P
                            </span>

                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>

                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>

                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>

                            <span data-text-preloader="g-" class="letters-loading">
                                g-
                            </span>

                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="u" class="letters-loading">
                                u
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>

                        </div>
                    </div>
                    <div class="loader-section section-left"></div>
                    <div class="loader-section section-right"></div>
                </div>
            </div>
        </div>


        <a href="#main-wrapper" id="backto-top" class="back-to-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <div id="main-wrapper" class="main-wrapper overflow-hidden">

            @include('frontend.layout.header')


            @yield('content')

            @include('frontend.layout.footer')

        </div>


{{--        <aside id="sidebar-cart">--}}
{{--            <a href="javascript:;" class="close-button close-popup"><span class="close-icon">X</span></a>--}}
{{--            <div class="mb-32">--}}
{{--                <h3 class="h-39 color-dark-2 fw-400 font-sec mb-32">WISHLIST ITEMS <span class="h-27">(2)</span></h3>--}}
{{--                <div class="vr-line"></div>--}}
{{--            </div>--}}
{{--            <ul class="product-list">--}}
{{--                <li class="product-item mb-24">--}}
{{--                    <a href="javascript:;">--}}
{{--                        <span class="item-image">--}}
{{--                            <img src="{{asset('assets/media/products/cart/c-1.png')}}" alt="Product Photo">--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                    <div class="product-text">--}}
{{--                        <a href="javascript:;">--}}
{{--                            <h5 class="h-21 font-sec fw-500 color-dark-2 mb-8">Timeless Trellis Lace Dress</h5>--}}
{{--                        </a>--}}
{{--                        <h6 class="h-21 font-sec fw-500 color-dark-2 mb-12">1 x $140.99</h6>--}}
{{--                        <a href="#remove" class="h-16 fw-500 font-sec color-primary">REMOVE</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="vr-line mb-24"></li>--}}
{{--                <li class="product-item">--}}
{{--                    <a href="javascript:;">--}}
{{--                        <span class="item-image">--}}
{{--                            <img src="{{asset('assets/media/products/cart/c-2.png')}}" alt="Product Photo">--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                    <div class="product-text">--}}
{{--                        <a href="javascript:;">--}}
{{--                            <h5 class="h-21 font-sec fw-500 color-dark-2 mb-8">Ethereal Elegance Cocktail Dress</h5>--}}
{{--                        </a>--}}
{{--                        <h6 class="h-21 font-sec fw-500 color-dark-2 mb-12">1 x $140.99</h6>--}}
{{--                        <a href="#remove" class="h-16 fw-500 font-sec color-primary">REMOVE</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <div class="vr-line mb-24"></div>--}}
{{--            <div class="action-buttons">--}}
{{--                <a href="{{route('cart')}}" class="cus-btn">VIEW CART</a>--}}
{{--                <a href="{{route('checkout')}}" class="cus-btn active-btn">CHECKOUT</a>--}}
{{--            </div>--}}
{{--        </aside>--}}
{{--        <div id="sidebar-cart-curtain" class="close-popup"></div>--}}

{{--        <div class="modal fade" id="productQuickView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h2 class="modal-title fs-5 h1 light-black fw-500" id="staticBackdropLabel">Mangoes</h2>--}}
{{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <div class="product-list-3">--}}
{{--                            <div class="shop-block mb-24 text-center">--}}
{{--                                <div class="img-box">--}}
{{--                                    <a href="shop-detail.html">--}}
{{--                                        <img src="{{asset('assets/media/products/p-6.png')}}" alt="" class="mb-md-0 mb-16"></a>--}}
{{--                                </div>--}}
{{--                                <div class="">--}}
{{--                                    <div class="price v-2">--}}
{{--                                        <h5 class="light-black mt-4 mb-2"><a href="shop-detail.html">Mangoes</a></h5>--}}
{{--                                        <h5 class="color-primary">$22.00</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="rating-star mb-16">--}}
{{--                                        <i class="fas fa-star color-primary"></i>--}}
{{--                                        <i class="fas fa-star color-primary"></i>--}}
{{--                                        <i class="fas fa-star color-primary"></i>--}}
{{--                                        <i class="fas fa-star color-primary"></i>--}}
{{--                                        <i class="fas fa-star color-primary"></i>--}}
{{--                                    </div>--}}
{{--                                    <hr class="bg-sec-gray mb-16 d-md-flex d-none">--}}
{{--                                    <a href="cart.html" class="cus-btn">Add to Cart</a>--}}
{{--                                    <a href="checkout.html" class="cus-btn">Buy Now</a>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


        <script src="{{asset('assets/js/vendor/jquery-3.6.3.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-appear.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-validator.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery.countdown.min.js')}}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>
    </body>
    </html>
