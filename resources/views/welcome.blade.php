@extends('frontend.layout.app')

@section('content')
    <style>
        .nav-container {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .nav-item {
            margin-right: 16px;
            /* Adjust spacing as needed */
        }

        .nav-link.active {
            font-weight: bold;
            /* Example of active link styling */
        }
    </style>

    <section class="banner">
        <div class="content">
            <div class="container">
                <h5>YOUR</h5>
                <h2 class="title">ONE STOP SHOP</h2>
                <p class="description">E-Bazar is your one-stop shop for all your grocery needs. We have<br> a wide
                    selection of fresh produce, meats, seafood, dairy, and<br> baked goods, all at affordable prices.
                    Plus, we offer free delivery. </p>
                <div class="main-btn text-end">
                    <a href="{{ route('shop') }}" class="cus-btn dark">Explore Products</a>
                </div>
            </div>
        </div>
        @php
            $setting = \App\Models\Generalsetting::first();
        @endphp
        @if ($setting)
            <img src="{{ asset('storage/' . $setting->home_page_banner) }}" class="object">
        @else
            <span>Home Page Banner image Found</span>
        @endif
        {{--        <img src="{{asset('assets/media/banner/object-1.png')}}" alt="" class="object"> --}}
    </section>


    <!-- Category Area start -->
    <section class="category pt-96 pb-48">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="category-box">
                        <div class="img-block">
                            <img src="{{ asset('assets/media/products/c-1.png') }}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="discount">
                                <h2>20%</h2>
                                <span>OFF</span>
                            </div>
                            <h4>White Bread</h4>
                            <a href="{{ route('shop') }}" class="cus-btn dark">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="category-box">
                        <div class="img-block">
                            <img src="{{ asset('assets/media/products/c-2.png') }}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="discount">
                                <h2>10%</h2>
                                <span>OFF</span>
                            </div>
                            <h4>Pine-Apple</h4>
                            <a href="" class="cus-btn dark">Enquiry Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Area end -->

    <!-- Products Area start -->
    <section class="Products pt-48 pb-96">
        <div class="container">
            <div class="heading text-center">
                <h2>All Products</h2>
            </div>
            <div class="row">
                <div class="col-xl-9 offset-xl-2">
                    <ul class="nav nav-tabs title-btn justify-content-around" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('user-side') }}" class="nav-link{{ !$slug ? ' active' : '' }}" role="tab">
                                All Products
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('user-side', ['slug' => $category->slug]) }}"
                                    class="nav-link{{ $slug == $category->slug ? ' active' : '' }}" role="tab">

                                    {{ $category->category_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div id="all-products" class="tab-pane active">
                    <div id="food_drink" class="tab-pane">
                        <div class="row" id="product-list">
                            @foreach ($all_products as $product)
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">

                                        <div class="showcase-box">


                                            @if (isset($product->images) && count($product->images) > 0)
                                                <img src="{{ asset('storage/' . $product->images[0]) }}"
                                                    style="width: 256px;
    height: 256px;">
                                            @else
                                                <p>No Image available</p>
                                            @endif
                                            <span class="price">₹{{ $product->price }}</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('product-details', $product->id) }}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#productQuickView_{{ $product->id }}"><i
                                                            class="fal fa-eye"></i></a>
                                                    <a href="#"><i class="fal fa-box-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="{{ route('product-details', $product->id) }}"
                                            class="title">{{ $product->product_name }}</a>
                                        <a href="{{ route('contactus', ['productName' => $product->product_name]) }}"
                                            class="cus-btn dark cart-button">Enquiry Now</a>

                                    </div>
                                </div>

                                <div class="modal fade" id="productQuickView_{{ $product->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title fs-5 h1 light-black fw-500" id="staticBackdropLabel">
                                                    {{ $product->product_name }}</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="product-list-3">
                                                    <div class="shop-block mb-24 text-center">
                                                        <div class="img-box">
                                                            <a href="">
                                                                @if (isset($product->images) && count($product->images) > 0)
                                                                    <img src="{{ asset('storage/' . $product->images[0]) }}"
                                                                        alt="Product Image" class="mb-md-0 mb-16">
                                                                @endif
                                                            </a>
                                                        </div>


                                                        <div class="">
                                                            <div class="price v-2">
                                                                <h5 class="light-black mt-4 mb-2">
                                                                    <a href="">{{ $product->product_name }}</a>
                                                                </h5>
                                                                <h5 class="color-primary">
                                                                    ₹{{ $product->price }}</h5>
                                                            </div>
                                                            <div class="rating-star mb-16">
                                                                <i class="fas fa-star color-primary"></i>
                                                                <i class="fas fa-star color-primary"></i>
                                                                <i class="fas fa-star color-primary"></i>
                                                                <i class="fas fa-star color-primary"></i>
                                                                <i class="fas fa-star color-primary"></i>
                                                            </div>
                                                            <hr class="bg-sec-gray mb-16 d-md-flex d-none">
                                                            <a href="{{ route('contactus', ['productName' => $product->product_name]) }}"
                                                                class="cus-btn">Enquiry Now</a>
                                                            <a href="{{ route('checkout') }}" class="cus-btn">Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="text-center">
                            <button class="cus-btn bordered" id="load-more">Discover More....</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Inner Banner Area start -->
    <section class="inner-banner">
        <div class="container">
            <div class="content pt-48">
                <h5>Dry Fruits</h5>
                <h2>BACK IN STOCK</h2>
                <ul class="timer countdown list-unstyled">
                    <li>29<small>d</small></li>
                    <li>23<small>h</small></li>
                    <li>50<small>m</small></li>
                    <li>34<small>s</small></li>
                </ul>
            </div>
        </div>
    </section>



    <section class="Featured-Products pt-96 pb-48">
        <div class="container">
            <div class="heading text-center">
                <h2>Featured Products</h2>
            </div>
            <div class="row">
                @foreach ($featured_products as $product)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-card">
                            <div class="showcase-box">
                                @if (isset($product->images) && count($product->images) > 0)
                                    <img src="{{ asset('storage/' . $product->images[0]) }}" alt="Product Image"
                                        class="mb-md-0 mb-16" style="    width: 261px;
    height: 261px;">
                                @endif
                                <span class="price">₹{{ $product->price }}</span>
                                <div class="overlay">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('product-details', $product->id) }}" data-bs-toggle="modal"
                                            data-bs-target="#featuredproductQuickView_{{ $product->id }}"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="#"><i class="fal fa-box-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('product-details', $product->id) }}"
                                class="title">{{ $product->product_name }}</a>
                                <a href="{{ route('contactus', ['productName' => $product->product_name]) }}"
                                    class="cus-btn">Enquiry Now</a>
                        </div>
                    </div>


                    <div class="modal fade" id="featuredproductQuickView_{{ $product->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title fs-5 h1 light-black fw-500" id="staticBackdropLabel">
                                        {{ $product->product_name }}</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="product-list-3">
                                        <div class="shop-block mb-24 text-center">
                                            <div class="img-box">
                                                <a href="shop-detail.html">
                                                    @if (isset($product->images) && count($product->images) > 0)
                                                        <img src="{{ asset('storage/' . $product->images[0]) }}"
                                                            alt="Product Image" class="mb-md-0 mb-16">
                                                    @endif
                                                </a>
                                            </div>


                                            <div class="">
                                                <div class="price v-2">
                                                    <h5 class="light-black mt-4 mb-2">
                                                        <a href="shop-detail.html">{{ $product->product_name }}</a>
                                                    </h5>
                                                    <h5 class="color-primary">
                                                        ₹{{ $product->price }}</h5>
                                                </div>
                                                <div class="rating-star mb-16">
                                                    <i class="fas fa-star color-primary"></i>
                                                    <i class="fas fa-star color-primary"></i>
                                                    <i class="fas fa-star color-primary"></i>
                                                    <i class="fas fa-star color-primary"></i>
                                                    <i class="fas fa-star color-primary"></i>
                                                </div>
                                                <hr class="bg-sec-gray mb-16 d-md-flex d-none">
                                                <a href="{{ route('contactus') }}" class="cus-btn">Enquiry Now</a>
                                                <a href="{{ route('checkout') }}" class="cus-btn">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Products Area End -->

    <!-- testimonials Area start -->
    <section class="testimonials pt-48 pb-48">
        <div class="container">
            <div class="heading text-center">
                <h2>Client’s Reviews</h2>
            </div>
            <div class="testimonial-slider" style="height:232px;">
                <div class="testimonial-box">
                    <div class="upper-row">
                        <img src="{{ asset('assets/media/user/Image.png') }}" alt="">
                        <h6 class="name">Richard Johnson</h6>
                    </div>
                    <p class="review">
                        Cobbler's shoes are the epitome of style and elegance. I receive compliments every time I wear
                        them. The craftsmanship is outstanding, and the fit is perfect.
                    </p>
                </div>
                <div class="testimonial-box">
                    <div class="upper-row">
                        <img src="{{ asset('assets/media/user/Image-1.png') }}" alt="">
                        <h6 class="name">Susan Hernandez</h6>
                    </div>
                    <p class="review">
                        I cannot express how impressed I am with Cobbler's customer service. They went above and beyond
                        to ensure I got the right pair of shoes that suited my style.
                    </p>
                </div>
                <div class="testimonial-box">
                    <div class="upper-row">
                        <img src="{{ asset('assets/media/user/Image-2.png') }}" alt="">
                        <h6 class="name">Richard Johnson</h6>
                    </div>
                    <p class="review">
                        Cobbler's shoes are a work of art. Each pair is meticulously crafted with precision and passion.
                        I am constantly impressed by the unique designs and the level of comfort.
                    </p>
                </div>
                <div class="testimonial-box">
                    <div class="upper-row">
                        <img src="{{ asset('assets/media/user/Image-1.png') }}" alt="">
                        <h6 class="name">Susan Hernandez</h6>
                    </div>
                    <p class="review">
                        I cannot express how impressed I am with Cobbler's customer service. They went above and beyond
                        to ensure I got the right pair of shoes that suited my style.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {

        let offset = 8;
        let slug = '{{ $slug }}'; // Store the slug value in a JavaScript variable

        $('#load-more').on('click', function() {
            $.ajax({
                url: '{{ route('load-more-products') }}',
                type: 'GET',
                data: {
                    slug: slug,
                    offset: offset
                },
                success: function(response) {
                    console.log(response);
                    if (response.length > 0) {
                        response.forEach(function(product) {
                            let productHtml = `
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            ${product.images && product.images.length > 0 ? `<img src="{{ asset('storage/') }}/${product.images[0]}">` : '<p>No Image available</p>'}
                                            <span class="price">₹${product.price}</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('product-details', '') }}/${product.id}" data-bs-toggle="modal" data-bs-target="#productQuickView_${product.id}"><i class="fal fa-eye"></i></a>
                                                    <a href="#"><i class="fal fa-box-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('product-details', '') }}/${product.id}" class="title">${product.product_name}</a>
                                        <a href="{{ route('contactus', ['productName' => '']) }}/${product.product_name}" class="cus-btn dark cart-button">Enquiry Now</a>
                                    </div>
                                </div>
                            `;
                            $('#product-list').append(productHtml);
                        });
                        offset += 8;
                    } else {
                        $('#load-more').text('No more products').prop('disabled', true);
                    }
                }
            });
        });
    });
</script>
