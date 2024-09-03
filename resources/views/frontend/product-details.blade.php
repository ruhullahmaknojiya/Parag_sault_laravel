@extends('frontend.layout.app')



@section('content')
    <style>
        .large-image {
            width: 400px; /* Example large size */
            height: auto;
        }

        .small-image {
            width: 100px; /* Example small size */
            height: auto;
        }
    </style>

    <section class="page-start-banner">
        <div class="container">
            <h2 class="title">Product Detail</h2>
        </div>
    </section>

    <section class="product-detail pt-96 pb-48">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="detail-img-block">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-center">
                            <div class="image-container">
                                <div class="row">
                                
                                    @foreach($products->images as $index => $image)
                                        <div class="col-md-12">
                                            <img alt="Product Image" class="small-image"
                                                 style="width: 80% !important; height: 100%; margin: 0 auto; display: block; padding: 10px; border-radius: 20px;"
                                                 src="{{ asset('storage/' . $image) }}"
                                                 onclick="changeLargeImage('{{ asset('storage/' . $image) }}')">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            </div>

                            <div class="col-9 d-flex justify-content-center align-items-center">
                                <img id="largeImage" alt="Product Image" class="large-image w-100" style="border-radius:25px "  src="{{ asset('storage/' . $image) }}">
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function changeLargeImage(newSrc) {
                        document.getElementById('largeImage').src = newSrc;
                    }
                </script>
                <div class="col-lg-6">
                    <div class="detail">
                        <div class="d-flex mb-16">
                            <h5 class="p-name">{{$products->product_name}}</h5>
                            <h6 class="price">₹{{$products->price}}</h6>
                        </div>
                        <p class="mb-32">
                            The Brogue features a distinctive perforated design on <br> the upper, known as broguing,
                            which adds a touch of <br> refinement and chara-ter to the wearer of the shoepair.
                        </p>
                        <div class="features mb-32">
                            <h6 class="title">Category: <span>{{$products->category->category_name}}</span></h6>
                            <h6 class="title">SKU: <span>{{$products->SKU}}</span></h6>
                        </div>

                        <div class="d-sm-flex">
                            <a href="{{ route('contactus', ['productName' => $products->product_name]) }}"
                                class="cus-btn dark cart-button">Enquiry Now</a>&emsp13;
                            <a href="{{route('checkout')}}" class="cus-btn bordered">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Area end -->

    <!-- About Product Area start -->
    <section class="about-products pt-48 pb-48">
        <div class="container">
            <div class="about-product pt-5">
                <ul class="nav nav-tabs title-btn" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                                role="tab">Reviews(36)
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#description" type="button"
                                role="tab">Product Detail
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="reviews" class="tab-pane in active pt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="review-box">
                                    <div class="d-flex">
                                        <img src="{{asset('assets/media/user/u-1.png')}}" alt="">
                                        <div class="user">
                                            <h6 class="name">Jeager Milka</h6>
                                        </div>
                                    </div>
                                    <p class="review">
                                        Cobbler's shoes are a work of art. Each pair is meticulously crafted with
                                        precision and passion. I am constantly impressed by the unique designs and the
                                        level of comfort.
                                    </p>
                                </div>
                                <div class="review-box">
                                    <div class="d-flex">
                                        <img src="{{asset('assets/media/user/u-2.png')}}" alt="">
                                        <div class="user">
                                            <h6 class="name">Dave Walker</h6>
                                        </div>
                                    </div>
                                    <p class="review">
                                        I cannot express how impressed I am with Cobbler's customer service. They went
                                        above and beyond to ensure I got the right pair of shoes that suited my style.
                                    </p>
                                </div>
                                <div class="review-box">
                                    <div class="d-flex">
                                        <img src="{{asset('assets/media/user/u-3.png')}}" alt="">
                                        <div class="user">
                                            <h6 class="name">Fresco Miller</h6>
                                        </div>
                                    </div>
                                    <p class="review">
                                        Cobbler's shoes are the epitome of style and elegance. I receive compliments
                                        every time I wear them. The craftsmanship is outstanding, and the fit is
                                        perfect.
                                    </p>
                                </div>
                                <div class="more-review-block">
                                    <a href="#" class="accordion-button comment-btn" data-bs-toggle="collapse"
                                       data-bs-target="#coments" aria-expanded="true"> Load More Reviews
                                        <i class="fa fa-chevron-down"></i></a>
                                    <div id="coments" class="accordion-collapse collapse "
                                         data-bs-parent="#accordionExample">
                                        <div class="review-box">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/media/user/u-2.png')}}" alt="">
                                                <div class="user">
                                                    <h6 class="name">Dave Walker</h6>
                                                </div>
                                            </div>
                                            <p class="review">
                                                I cannot express how impressed I am with Cobbler's customer service.
                                                They went above and beyond to ensure I got the right pair of shoes that
                                                suited my style.
                                            </p>
                                        </div>
                                        <div class="review-box">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/media/user/u-3.png')}}" alt="">
                                                <div class="user">
                                                    <h6 class="name">Fresco Miller</h6>
                                                </div>
                                            </div>
                                            <p class="review">
                                                Cobbler's shoes are the epitome of style and elegance. I receive
                                                compliments every time I wear them. The craftsmanship is outstanding,
                                                and the fit is perfect.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="design-block">
                                    <h6>Add a Review</h6>
                                    <form action="https://uiparadox.co.uk/public/templates/ebazar/product-detail.html">
                                        <div class="input-group mb-32">
                                            <input type="text" class="form-control" id="name" name="name" required
                                                   placeholder="Name">
                                        </div>
                                        <div class="input-group mb-32">
                                            <input type="email" class="form-control" id="email" name="email" required
                                                   placeholder="Email">
                                        </div>
                                        <div class="input-group mb-32">
                                            <textarea name="review" class="form-control" id="user_review" rows="3"
                                                      required placeholder="Your Review"></textarea>
                                        </div>
                                        <button type="submit" class="cus-btn dark">Add Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="description" class="tab-pane description">
                        <p>
                            Introducing the Brogue Shoe: Classic Elegance and Timeless Style. Step into sophistication
                            with our exquisite Brogue shoe. Crafted with meticulous attention to detail, this iconic
                            footwear combines traditional craftsmanship with modern flair.
                        </p>

                        <h6>Key Features:</h6>
                        <ul>
                            <li> Premium Quality: Made from genuine leather, the Brogue shoe offers unparalleled
                                durability and comfort. Its sturdy construction ensures long-lasting wear, making it a
                                reliable companion for any occasion.
                            </li>
                            <li>Classic Design: The Brogue shoe showcases a timeless design with its distinctive
                                perforated detailing and wingtip pattern. Its sleek and polished appearance adds a touch
                                of elegance to your ensemble.
                            </li>
                            <li>Versatile Colors: Choose from our range of versatile color options, including rich
                                brown, sleek black, and sophisticated oxblood. Each shade complements various outfits,
                                allowing you to express your personal style.
                            </li>
                        </ul>

                        <h6>Experience the Perfect Fit:</h6>
                        <ul>
                            <li>Customized Comfort: The Brogue shoe features a cushioned insole and a flexible outsole,
                                providing optimal comfort throughout the day. It molds to the contours of your feet,
                                ensuring a comfortable fit with every step.
                            </li>
                            <li>Secure Closure: Equipped with a lace-up closure, the Brogue shoe offers a secure and
                                adjustable fit. You can tighten or loosen the laces according to your preference,
                                providing added convenience and support.
                            </li>

                        </ul>
                        <p>
                            Whether you're attending a formal event, heading to the office, or simply stepping out in
                            style, the Brogue shoe is a timeless choice that exudes confidence and refinement. Elevate
                            your footwear collection with this classic masterpiece.
                        </p>
                        <p>
                            Please note: The actual color of the product may vary slightly from the images due to
                            lighting and monitor settings.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="related-products pt-48 pb-48">
        <div class="container">
            <div class="heading ">
                <h2>Related Products</h2>
            </div>
        </div>
        <div class="product-slider">
            <div class="product-card slide-margin">
                <div class="showcase-box">
                    <img src="{{asset('assets/media/products/p-1.png')}}" alt="">
                    <span class="price">$58</span>
                    <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="" data-bs-toggle="modal" data-bs-target="#productQuickView"><i
                                    class="fal fa-eye"></i></a>
                            <a href="#"><i class="fal fa-box-heart"></i></a>
                        </div>
                    </div>
                </div>
                <a href="product-detail.html" class="title">Running Trainers</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
            </div>
            <div class="product-card slide-margin">
                <div class="showcase-box">
                    <img src="{{asset('assets/media/products/p-2.png')}}" alt="">
                    <span class="price">$35</span>
                    <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="" data-bs-toggle="modal" data-bs-target="#productQuickView"><i
                                    class="fal fa-eye"></i></a>
                            <a href="#"><i class="fal fa-box-heart"></i></a>
                        </div>
                    </div>
                </div>
                <a href="" class="title">Classic Timberland</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
            </div>
            <div class="product-card slide-margin">
                <div class="showcase-box">
                    <img src="{{asset('assets/media/products/p-3.png')}}" alt="">
                    <span class="price">$69</span>
                    <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="" data-bs-toggle="modal" data-bs-target="#productQuickView"><i
                                    class="fal fa-eye"></i></a>
                            <a href="#"><i class="fal fa-box-heart"></i></a>
                        </div>
                    </div>
                </div>
                <a href="" class="title">Felted Sneakers</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
            </div>
            <div class="product-card slide-margin">
                <div class="showcase-box">
                    <img src="{{asset('assets/media/products/p-4.png')}}" alt="">
                    <span class="price">$99</span>
                    <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="" data-bs-toggle="modal" data-bs-target="#productQuickView"><i
                                    class="fal fa-eye"></i></a>
                            <a href="#"><i class="fal fa-box-heart"></i></a>
                        </div>
                    </div>
                </div>
                <a href="" class="title">Golden Goose</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
            </div>
            <div class="product-card slide-margin">
                <div class="showcase-box">
                    <img src="{{asset('assets/media/products/p-5.png')}}" alt="">
                    <span class="price">$55</span>
                    <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="" data-bs-toggle="modal" data-bs-target="#productQuickView"><i
                                    class="fal fa-eye"></i></a>
                            <a href="#"><i class="fal fa-box-heart"></i></a>
                        </div>
                    </div>
                </div>
                <a href="" class="title">Felted Sneakers</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
            </div>
            <div class="product-card slide-margin">
                <div class="showcase-box">
                    <img src="{{asset('assets/media/products/p-6.png')}}" alt="">
                    <span class="price">$66</span>
                    <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="" data-bs-toggle="modal" data-bs-target="#productQuickView"><i
                                    class="fal fa-eye"></i></a>
                            <a href="#"><i class="fal fa-box-heart"></i></a>
                        </div>
                    </div>
                </div>
                <a href="" class="title">Running Trainers</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
            </div>
            <div class="product-card slide-margin">
                <div class="showcase-box">
                    <img src="{{asset('assets/media/products/p-7.png')}}" alt="">
                    <span class="price">$77</span>
                    <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="" data-bs-toggle="modal" data-bs-target="#productQuickView"><i
                                    class="fal fa-eye"></i></a>
                            <a href="#"><i class="fal fa-box-heart"></i></a>
                        </div>
                    </div>
                </div>
                <a href="" class="title">Classic Timberland</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
            </div>
            <div class="product-card slide-margin">
                <div class="showcase-box">
                    <img src="{{asset('assets/media/products/p-8.png')}}" alt="">
                    <span class="price">$33</span>
                    <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="" data-bs-toggle="modal" data-bs-target="#productQuickView"><i
                                    class="fal fa-eye"></i></a>
                            <a href="#"><i class="fal fa-box-heart"></i></a>
                        </div>
                    </div>
                </div>
                <a href="" class="title">Felted Sneakers</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
            </div>
        </div>
    </section> --}}

@endsection


