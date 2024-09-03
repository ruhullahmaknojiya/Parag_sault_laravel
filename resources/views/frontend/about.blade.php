@extends('frontend.layout.app')


@section('content')

<div class="container">
                    <h2 class="title">About Us</h2>
                </div>
            </section>
            <!-- Page Banner End -->

            <!-- About Area Start  -->
            <section class="about pt-96 pb-48">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="block">
                                <h3>Welcome to E-Bazar</h3>
                                <p>At E-Bazar, we are passionate about providing you with the freshest and highest quality groceries. Our mission is to make your shopping experience convenient, enjoyable, and satisfying. With a wide selection of locally sourced produce, pantry staples, and specialty items, we strive to meet all your grocery needs under one roof.</p>
                                <p>We believe in building strong relationships with local farmers and suppliers, ensuring that our products are fresh, sustainable, and ethically sourced. Our knowledgeable and friendly staff is dedicated to assisting you in finding the best ingredients for your recipes, answering your questions, and providing personalized recommendations.</p>
                            </div>
                            <div class="block">
                                <h3>Our Philosophy</h3>
                                <p>We value your trust and satisfaction. That's why we maintain strict quality control measures to guarantee the freshness and integrity of every item on our shelves. From farm-fresh fruits and vegetables to organic dairy products, from gourmet spices to gluten-free alternatives.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="assets/media/about/about-1.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="chose-us pt-48 pb-48">
                <div class="container">
                    <div class="heading text-srart">
                        <h2>Why Chose Us?</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="chose-block">
                                <img src="{{asset('assets/media/icon/quality.png')}}" alt="">
                                <h6>High Quality</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="chose-block">
                                <img src="{{asset('assets/media/icon/organic.png')}}" alt="">
                                <h6>Pesticide Free</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="chose-block">
                                <img src="{{asset('assets/media/icon/food.png')}}" alt="">
                                <h6>Curated Products</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="chose-block">
                                <img src="{{asset('assets/media/icon/brand.png')}}" alt="">
                                <h6>All Brands</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonials pt-48 pb-48">
                <div class="container">
                    <div class="heading text-start">
                        <h2>Client’s Reviews</h2>
                    </div>
                    <div class="testimonial-slider">
                        <div class="testimonial-box">
                            <div class="upper-row">
                                <img src="{{asset('assets/media/user/Image.png')}}" alt="">
                                <h6 class="name">Richard Johnson</h6>
                            </div>
                            <p class="review">
                                Cobbler's shoes are the epitome of style and elegance. I receive compliments every time I wear them. The craftsmanship is outstanding, and the fit is perfect.
                            </p>
                        </div>
                        <div class="testimonial-box">
                            <div class="upper-row">
                                <img src="{{asset('assets/media/user/Image-1.png')}}" alt="">
                                <h6 class="name">Susan Hernandez</h6>
                            </div>
                            <p class="review">
                                I cannot express how impressed I am with Cobbler's customer service. They went above and beyond to ensure I got the right pair of shoes that suited my style.
                            </p>
                        </div>
                        <div class="testimonial-box">
                            <div class="upper-row">
                                <img src="{{asset('assets/media/user/Image-2.png')}}" alt="">
                                <h6 class="name">Richard Johnson</h6>
                            </div>
                            <p class="review">
                                Cobbler's shoes are a work of art. Each pair is meticulously crafted with precision and passion. I am constantly impressed by the unique designs and the level of comfort.
                            </p>
                        </div>
                        <div class="testimonial-box">
                            <div class="upper-row">
                                <img src="{{asset('assets/media/user/Image-1.png')}}" alt="">
                                <h6 class="name">Susan Hernandez</h6>
                            </div>
                            <p class="review">
                                I cannot express how impressed I am with Cobbler's customer service. They went above and beyond to ensure I got the right pair of shoes that suited my style.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

@endsection



