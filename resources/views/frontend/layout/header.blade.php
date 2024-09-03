 <header class="header">
     <div class="container">
         <nav class="navbar navbar-expand-xl">
             <a class="navbar-brand" href="{{ route('user-side') }}">
{{--                <img alt="" src="assets/media/logo.png">--}}
                 <h4 class="mt-3 mb-6">
                     @php
                         $setting = \App\Models\Generalsetting::first();
                     @endphp
                     @if($setting)
{{--                         <img src="assets/media/logo.png">--}}
                         <img src="{{ asset('storage/'.$setting->bazar_logo_site) }}" class="rounded" style="width: 50px; height: 50px;">

                     @else
                         <span>No image</span>
                     @endif
                 </h4>
            </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar"><i class="fas fa-bars"></i></button>
             <div class="collapse navbar-collapse text-start" id="mynavbar">
                 <ul class="navbar-nav mainmenu m-0">
                     <li class="menu-item">
                         <a href="{{ route('user-side') }}" class="{{ Request::routeIs('user-side') ? 'active' : '' }}">Home</a>
                     </li>
                     <li class="menu-item">
                         <a href="{{ route('shop') }}" class="{{ Request::routeIs('shop') ? 'active' : '' }}">Products</a>
                     </li>
                     <li class="menu-item">
                         <a href="{{ route('aboutus') }}" class="{{ Request::routeIs('aboutus') ? 'active' : '' }}">About</a>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="javascript:void(0);" class="{{ Request::routeIs('cart', 'checkout') ? 'active' : '' }}">Pages</a>
                        <ul class="submenu">
                            <li class="menu-item">
                                <a href="{{ route('cart') }}" class="{{ Request::routeIs('cart') ? 'active' : '' }}">Cart</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('checkout') }}" class="{{ Request::routeIs('checkout') ? 'active' : '' }}">Checkout</a>
                            </li>
                        </ul>
                    </li>
                    
                     <li class="menu-item">
                         <a href="{{ route('contactus') }}" class="{{ Request::routeIs('contactus') ? 'active' : '' }}">Contact Us</a>
                     </li>
                 </ul>

             </div>
             <div class="right-content d-xl-block d-none">
                 <ul class="list list-unstyled d-flex">
                     <li id="search-form">
                         <form method="get" action="https://uiparadox.co.uk/public/templates/ebazar/shop.html">
                             <div class="input-group">
                                 <button type="submit" class="input-group-text"><i class="fal fa-search"></i></button>
                                 <input type="text" class="form-control" placeholder="Search">
                             </div>
                         </form>
                     </li>
                     <li><a href="javascript:;" class="search-btn"><i class="fal fa-search"></i></a></li>
                     <li><a href="#"><i class="fal fa-box-heart"></i></a></li>
                     <li><a href="javascript:;" class="cart-button"><i class="fal fa-shopping-cart"></i></a></li>
                 </ul>
             </div>
         </nav>
     </div>
 </header>




