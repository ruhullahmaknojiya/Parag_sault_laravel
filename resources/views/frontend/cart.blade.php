@extends('frontend.layout.app')


@section('content')

    <section class="page-start-banner">
        <div class="container">
            <h2 class="title"> Cart</h2>
        </div>
    </section>

    <section class="cart pt-96 pb-48">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 d-lg-block d-none">
                    <table class="cart-table-lg">
                        <tr class="upper-row">
                            <td class="img-block" rowspan="2"><img src="assets/media/products/cart/c-1.png" alt=""></td>
                            <td class="title"><a href="">Item:<span> Banana</span></a></td>
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
                            <td class="img-block" rowspan="2"><img src="{{asset('assets/media/products/cart/c-2.png')}}"
                                                                   alt=""></td>
                            <td class="title"><a href="">Item:<span> Pea Pickle</span></a></td>
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
                            <td class="img-block" rowspan="2"><img src="{{asset('assets/media/products/cart/c-3.png')}}"
                                                                   alt=""></td>
                            <td class="title"><a href="">Item:<span> Mangoes</span></a></td>
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

                    <div class="mb-48 mb-xl-0">
                        <a href="{{route('shop')}}" class="cus-btn dark">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-12 d-lg-none d-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cart-table-sm">
                                <div class="content-block">
                                    <div class="text-center">
                                        <img src="{{asset('assets/media/products/cart/c-2.png')}}" alt=""><br>
                                        <a class="title" href="">Item:<span> Pea Pickle Jar</span></a><br>
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
                                            <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                                   class="number">
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
                                        <a class="title" href="">Item:<span> Mangoes</span></a><br>
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
                                            <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                                   class="number">
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
                                        <a class="title" href="">Item:<span> Banana</span></a><br>
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
                                            <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                                   class="number">
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
                    <div class="text-center mb-48">
                        <a href="{{route('shop')}}" class="cus-btn dark">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="cart-detail">
                        <div class="content-block">
                            <h5 class="title">Cart Detail</h5>
                            <div class="detail-row">
                                <p>Items Total</p>
                                <span>$368.00</span>
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
                            <div class="total-row">
                                <h6>Grand Total</h6>
                                <span>$355.90</span>
                            </div>
                            <a href="{{route('checkout')}}" class="cus-btn dark w-100">To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
