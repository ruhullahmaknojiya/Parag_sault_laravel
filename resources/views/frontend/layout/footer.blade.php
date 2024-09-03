<footer class="footer">
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-9 col-11">
                    <a class="logo" href="index.html">
                        @php
                            $setting = \App\Models\Generalsetting::first();
                        @endphp
                        @if($setting)
                            {{--                         <img src="assets/media/logo.png">--}}
                            <img src="{{ asset('storage/'.$setting->bazar_logo_site) }}" class="rounded"
                                 style="width: 50px; height: 50px;">

                        @else
                            <span>No image</span>
                        @endif
                    </a>
                    <p class="detail">Welcome to Cobbler, your go-to destination for exquisite footwear & exceptional
                        craftsmanship. With a passion for quality and timeless style, we pride ourselves with this.</p>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <h5 class="title">Categories</h5>
                    <ul class="list-unstyled links">
                        @php
                            $categories=\App\Models\Category::all();
                        @endphp
                        @foreach($categories as $category)
                            <li><a href="{{route('user-side')}}" style="
    font-size: 17px;">{{$category->category_name}}</a></li>
                            {{--                            <li><a href="{{route('user-side')}}">Vegetables</a></li>--}}
                            {{--                            <li><a href="{{route('user-side')}}">Fruits</a></li>--}}
                            {{--                            <li><a href="{{route('user-side')}}">Dairy</a></li>--}}
                        @endforeach
                        {{--                        <li><a  href="{{ route('user-side', ['slug' => $category->slug]) }}"--}}
                        {{--                                class="nav-link{{ $slug == $category->slug ? ' active' : '' }}"--}}
                        {{--                                role="tab">Food & Drinks</a></li>--}}
                        {{--                        <li><a href="{{ route('user-side', ['slug' => $category->slug]) }}"--}}
                        {{--                               class="nav-link{{ $slug == $category->slug ? ' active' : '' }}"--}}
                        {{--                               role="tab">Vegetables</a></li>--}}
                        {{--                        <li><a href="{{ route('user-side', ['slug' => $category->slug]) }}"--}}
                        {{--                               class="nav-link{{ $slug == $category->slug ? ' active' : '' }}"--}}
                        {{--                               role="tab">Fruits</a></li>--}}
                        {{--                        <li><a href="{{ route('user-side', ['slug' => $category->slug]) }}"--}}
                        {{--                               class="nav-link{{ $slug == $category->slug ? ' active' : '' }}"--}}
                        {{--                               role="tab">Dairy</a></li>--}}
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="title">Essential Links</h5>
                    <ul class="list-unstyled links">
                        <li><a href="{{route('user-side')}}"
                               class="{{ Request::routeIs('user-side') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{route('cart')}}" class="{{ Request::routeIs('cart') ? 'active' : '' }}">Cart</a>
                        </li>
                        <li><a href="{{route('shop')}}" class="{{ Request::routeIs('shop') ? 'active' : '' }}">Shop</a>
                        </li>
                        <li><a href="{{route('aboutus')}}" class="{{ Request::routeIs('aboutus') ? 'active' : '' }}">Aboutus</a>
                        </li>
                        <li><a href="{{route('contactus')}}"
                               class="{{ Request::routeIs('contactus') ? 'active' : '' }}">ContactUs</a></li>


                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-9 col-10">
                    <h5 class="title">Subscribe to Our Newsletter</h5>
                    <form action="https://uiparadox.co.uk/public/templates/ebazar/index.html">
                        <div class="input-group mb-16">
                            <input type="email" class="form-control" id="email" name="email" required
                                   placeholder="Your Email">
                        </div>
                        <button type="submit" class="cus-btn dark">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom-content">
            <h5 class="title">Contact Info</h5>

            <div class="contact-row">
                <ul class="contact-list list-unstyled">
                    <li><a href="tel:123456789"><i class="fal fa-phone-alt">

                            </i>
                            @php
                                $setting = \App\Models\Generalsetting::first();
                            @endphp
                            @if($setting)
                                {{$setting->contact_info}}
                            @endif

                        </a></li>
                    <li>

                        <a href="mailto:info@gmail.com"><i class="fal fa-envelope"></i>
                            @php
                                $setting=\App\Models\Generalsetting::first();
                            @endphp
                            @if($setting)
                                {{$setting->email}}
                            @endif
                        </a></li>
                    <li><span> <i class="fal fa-map-marker-alt"></i>
                        @php
                            $address_setting=\App\Models\Generalsetting::first();
                        @endphp
                            @if($address_setting)
                                {{$address_setting->address}}
                            @endif


                        </span></li>
                </ul>
                <ul class="footer-social-icon list-unstyled">
                    
                    <li><a href="https://www.facebook.com"><img src="assets/media/icon/icon.png" alt=""></a></li>
                    <li><a href="https://www.twitter.com"><img src="assets/media/icon/Vector.png" alt=""></a></li>
                    <li><a href="https://www.snapchat.com"><img src="assets/media/icon/Vector-1.png" alt=""></a></li>
                    <li><a href="https://instagram.com"><img src="assets/media/icon/Vector-2.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <p class="copyright">©2024 All rights are reserved by Parag-Sault</p>
        </div>
    </div>
</footer>
