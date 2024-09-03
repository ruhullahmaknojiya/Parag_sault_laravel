@extends('frontend.layout.app')

@section('content')

<section class="page-start-banner">
    <div class="container">
        <h2 class="title">Checkout</h2>
    </div>
</section>
<!-- Page Banner End -->

<!-- Cart Area start -->
<section class="checkout pt-96 pb-48">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-48 mb-xl-0">
                <div class="heading">
                    <h4>Shipping Detail</h4>
                </div>
                <div class="design-block shipping">
                    <form action="https://uiparadox.co.uk/public/templates/ebazar/index.html">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="_firstname" name="first_name" required placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="_lastname" name="last_name" required placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="email" class="form-control" id="_email" name="email" required placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="_phone" name="phone" required placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="_country" name="country" required placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="_state" name="state" required placeholder="State / County">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="_houseadress" name="house_address" required placeholder="House no and street name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="_appartmentadress" name="apartment_address" placeholder="Apartment, suite, (optional)">
                                </div>
                            </div>
                            <div class="formGroup2">
                                <input type="checkbox" id="keepcheck">
                                <label for="keepcheck"> Billing Address Same As Shipping Address</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="heading">
                    <h4>Billing Detail</h4>
                </div>
                <div class="design-block billing">
                    <form action="https://uiparadox.co.uk/public/templates/ebazar/index.html">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="firstname" name="first_name" required placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="lastname" name="last_name" required placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="phone" name="phone" required placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="country" name="country" required placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="state" name="state" required placeholder="State / County">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="houseadress" name="house_address" required placeholder="House no and street name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-32">
                                    <input type="text" class="form-control" id="appartmentadress" name="apartment_address" placeholder="Apartment, suite, (optional)">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart Area end -->

<!-- Cart Area start -->
<section class="cart pt-48 pb-48">
    <div class="container">
        <div class="row">
            <div class="heading">
                <h4>Cart Items</h4>
            </div>
            <div class="col-xl-8 col-lg-12 d-lg-block d-none">
                <table class="cart-table-lg">
                    <tr class="upper-row">
                        <td class="img-block" rowspan="2"><img src="{{asset('assets/media/products/cart/c-1.png')}}" alt=""></td>
                        <td class="title"><a href="product-detail.html">Item:<span> Banana</span></a></td>
                        <td class="title text-center">Price</td>
                        <td class="title text-center">Quantity</td>
                        <td class="title text-center pad-right">Sub Total</td>
                    </tr>
                    <tr class="bottom-row">
                        <td class="mesure">
                            <h6>Quantity: <span>12pc</span></h6>
                        </td>
                        <td class="text-center price-number">$318.00</td>
                        <td class="text-center">
                            <div class="quantity quantity-wrap">
                                <input class="decrement" type="button" value="-">
                                <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                <input class="increment" type="button" value="+">
                            </div>
                        </td>
                        <td class="text-center price-number">$318.00</td>
                    </tr>
                </table>
                <table class="cart-table-lg">
                    <tr class="upper-row">
                        <td class="img-block" rowspan="2"><img src="{{asset('assets/media/products/cart/c-2.png')}}" alt=""></td>
                        <td class="title"><a href="product-detail.html">Item:<span> Pea Pickle</span></a></td>
                        <td class="title text-center">Price</td>
                        <td class="title text-center">Quantity</td>
                        <td class="title text-center pad-right">Sub Total</td>
                    </tr>
                    <tr class="bottom-row">
                        <td class="mesure">
                            <h6>Quantity: <span>500g</span></h6>
                        </td>
                        <td class="text-center price-number">$99.00</td>
                        <td class="text-center">
                            <div class="quantity quantity-wrap">
                                <input class="decrement" type="button" value="-">
                                <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                <input class="increment" type="button" value="+">
                            </div>
                        </td>
                        <td class="text-center price-number">$99.00</td>
                    </tr>
                </table>
                <table class="cart-table-lg">
                    <tr class="upper-row">
                        <td class="img-block" rowspan="2">
                            <img src="{{asset('assets/media/products/cart/c-3.png')}}" alt=""></td>
                        <td class="title"><a href="product-detail.html">Item:<span> Mangoes</span></a></td>
                        <td class="title text-center">Price</td>
                        <td class="title text-center">Quantity</td>
                        <td class="title text-center pad-right">Sub Total</td>
                    </tr>
                    <tr class="bottom-row">
                        <td class="mesure">
                            <h6>Quantity: <span>1kg</span></h6>
                        </td>
                        <td class="text-center price-number">$211.00</td>
                        <td class="text-center">
                            <div class="quantity quantity-wrap">
                                <input class="decrement" type="button" value="-">
                                <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                <input class="increment" type="button" value="+">
                            </div>
                        </td>
                        <td class="text-center price-number">$211.00</td>
                    </tr>
                </table>

            </div>
            <div class="col-12 d-lg-none d-block">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cart-table-sm">
                            <div class="content-block">
                                <div class="text-center">
                                    <img src="{{asset('assets/media/products/cart/c-2.png')}}" alt=""><br>
                                    <a class="title" href="product-detail.html">Item:<span> Pea Pickle Jar</span></a><br>
                                    <h6 class="mesure">Quantity: <span>500g</span></h6>
                                </div>
                                <div class="cart-row">
                                    <p>Price</p>
                                    <span>$99.00</span>
                                </div>
                                <div class="cart-row">
                                    <p>Quantity</p>
                                    <div class="quantity quantity-wrap">
                                        <input class="decrement" type="button" value="-">
                                        <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                        <input class="increment" type="button" value="+">
                                    </div>
                                </div>
                                <div class="cart-row">
                                    <p>Sub Total</p>
                                    <span>$99.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-table-sm">
                            <div class="content-block">
                                <div class="text-center">
                                    <img src="{{asset('assets/media/products/cart/c-3.png')}}" alt=""><br>
                                    <a class="title" href="product-detail.html">Item:<span> Mangoes</span></a><br>
                                    <h6 class="mesure">Quantity: <span>1kg</span></h6>
                                </div>
                                <div class="cart-row">
                                    <p>Price</p>
                                    <span>$199.00</span>
                                </div>
                                <div class="cart-row">
                                    <p>Quantity</p>
                                    <div class="quantity quantity-wrap">
                                        <input class="decrement" type="button" value="-">
                                        <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                        <input class="increment" type="button" value="+">
                                    </div>
                                </div>
                                <div class="cart-row">
                                    <p>Sub Total</p>
                                    <span>$199.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <div class="cart-table-sm">
                            <div class="content-block">
                                <div class="text-center">
                                    <img src="{{asset('assets/media/products/cart/c-1.png')}}" alt=""><br>
                                    <a class="title" href="product-detail.html">Item:<span> Banana</span></a><br>
                                    <h6 class="mesure">Quantity: <span>12pc</span></h6>
                                </div>
                                <div class="cart-row">
                                    <p>Price</p>
                                    <span>$318.00</span>
                                </div>
                                <div class="cart-row">
                                    <p>Quantity</p>
                                    <div class="quantity quantity-wrap">
                                        <input class="decrement" type="button" value="-">
                                        <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                        <input class="increment" type="button" value="+">
                                    </div>
                                </div>
                                <div class="cart-row">
                                    <p>Sub Total</p>
                                    <span>$318.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">
                <div class="cart-detail">
                    <div class="content-block">
                        <h3>Order Detail</h3>
                        <div class="detail-row">
                            <p>Items Total</p>
                            <span>$594.00</span>
                        </div>
                        <div class="detail-row">
                            <p>Shipping Fee</p>
                            <span>$05.00</span>
                        </div>
                        <div class="detail-row">
                            <p>Tax</p>
                            <span>$02.90</span>
                        </div>
                        <div class="detail-row">
                            <p>Discount</p>
                            <span>$20.00</span>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="payment-method">
                            <h6>Payment Method</h6>
                            <label for="cod"><input id="cod" type="radio" name="radio" class="radio" value="1" checked="checked">Cash on Delivery</label>
                            <label for="cp"><input id="cp" type="radio" name="radio" class="radio" value="2">Cheque Payment </label>
                            <label for="bt"><input id="bt" type="radio" name="radio" class="radio" value="3">Bank Transfer </label>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="total-row">
                            <h6>Grand Total</h6>
                            <span>$574.90</span>
                        </div>
                        <a href="{{route('checkout')}}" class="cus-btn dark w-100">Confirm Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
