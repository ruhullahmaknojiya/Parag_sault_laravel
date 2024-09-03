@extends('frontend.layout.app')



@section('content')

    <section class="page-start-banner">
        <div class="container">
            <h2 class="title">
                <a href="{{route('shop')}}">Shop</a>
            </h2>
        </div>
    </section>


    <section class="arrivals pt-96 pb-48">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar">
                        <div class="content-block">
                            <div class="category-filter">
                                <div class="search-form">
                                        <div class="input-group">
                                            <input type="search" name="search" id="search_field" class="form-control" placeholder="Search">
                                            <button type="submit" class="input-group-text"><i class="fal fa-search"></i></button>
                                        </div>
                                </div>




                                <h5 class="title">Categories</h5>
                                <ul class="list-unstyled" id="demonames">


                                    @foreach($categories as $category)
                                        <li class="nav-item" role="presentation" >
                                            <a href="{{ route('shop', ['slug' => $category->slug]) }}"
                                               class="nav-link{{ $slug == $category->slug ? ' active' : '' }} demoname"
                                               role="tab">
                                                {{ $category->category_name }}
                                            </a>
                                        </li>
                                    @endforeach

                                    {{--                                 @foreach($categories as $category)--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="{{ route('shop', [$category->slug]) }}"--}}
                                    {{--                                           class="nav-link{{ $slug == $category->slug ? ' active' : '' }}"--}}
                                    {{--                                           role="tab">--}}
                                    {{--                                            {{ $category->category_name }}--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    @endforeach--}}
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        @foreach($all_products as $product)

                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                <div class="product-card">
                                    <div class="showcase-box">
                                        @if(isset($product->images) && count($product->images) > 0)
                                            <img src="{{ asset('storage/' . $product->images[0]) }}" style="
    width: 270px;
    height: 270px;">
                                        @else
                                            <p>No image available</p>
                                        @endif
                                        <span class="price">₹{{$product->price}}</span>
                                        <div class="overlay">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <a href="product-detail.html" data-bs-toggle="modal"
                                                   data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
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

                            <div class="modal fade" id="productQuickView" data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title fs-5 h1 light-black fw-500"
                                                id="staticBackdropLabel">{{$product->product_name}}</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="product-list-3">
                                                <div class="shop-block mb-24 text-center">
                                                    <div class="img-box">
                                                        <a href="">
                                                            @if(isset($product->images) && count($product->images) > 0)
                                                                <img
                                                                    src="{{ asset('storage/' . $product->images[0]) }}">
                                                            @else
                                                                <p>No image available</p>
                                                        @endif
                                                    </div>
                                                    <div class="">
                                                        <div class="price v-2">
                                                            <h5 class="light-black mt-4 mb-2"><a
                                                                    href="shop-detail.html">{{$product->product_name}}</a>
                                                            </h5>
                                                            <h5 class="color-primary">₹{{$product->price}}</h5>
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
                                                        <a href="#" class="cus-btn">Buy Now</a>
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
            </div>
        </div>
    </section>
    <!-- Products Area end -->

    <!-- Category Area start -->
    <section class="category pt-48 pb-48">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="category-box">
                        <div class="img-block">
                            <img src="{{asset('assets/media/products/c-1.png')}}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="discount">
                                <h2>20%</h2>
                                <span>OFF</span>
                            </div>
                            <h4>White Bread</h4>
                            <a href="{{route('shop')}}" class="cus-btn dark">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="category-box">
                        <div class="img-block">
                            <img src="{{asset('assets/media/products/c-2.png')}}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="discount">
                                <h2>10%</h2>
                                <span>OFF</span>
                            </div>
                            <h4>Pine-Apple</h4>

                            <a href="" class="cus-btn dark">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // SEARCH FUNCTION
    var btsearch = {
        init: function (search_field, searchable_elements, searchable_text_class) {
            $(search_field).keyup(function (e) {
                e.preventDefault();
                var query = $(this).val().toLowerCase();

                if (query) {
                    // loop through all elements to find match
                    $.each($(searchable_elements), function () {
                        var title = $(this).find(searchable_text_class).text().toLowerCase();
                        if (title.indexOf(query) == -1) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                } else {
                    // empty query so show everything
                    $(searchable_elements).show();
                }
            });
        }
    }

    // INIT
    $(function () {
        // USAGE: btsearch.init(('search field element', 'searchable children elements', 'searchable text class');
        btsearch.init('#search_field', '#demonames li', '.demoname');
    });
</script>

@endpush


{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        $('#search_field').on('input', function() {--}}
{{--            alert('hii');--}}
{{--            var query = $(this).val().toLowerCase();--}}
{{--            if (query) {--}}
{{--                $('#demonames li').each(function() {--}}
{{--                    var categoryName = $(this).text().toLowerCase();--}}
{{--                    if (categoryName.includes(query)) {--}}
{{--                        $(this).show();--}}
{{--                    } else {--}}
{{--                        $(this).hide();--}}
{{--                    }--}}
{{--                });--}}
{{--            } else {--}}
{{--                $('#demonames li').show();--}}
{{--            }--}}
{{--        });--}}

{{--        $('#searchForm').on('submit', function(event) {--}}
{{--            event.preventDefault();--}}
{{--            var query = $('#search_field').val().toLowerCase();--}}
{{--            window.location.href = `{{ route('shop') }}?search=${encodeURIComponent(query)}`;--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

