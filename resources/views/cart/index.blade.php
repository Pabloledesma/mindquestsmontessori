@extends('layouts.front')

@section('content')

     <!-- cart-main-area start -->
     <div class="cart-main-area ptb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">name of products</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="product-name">{{ $item->name }}</td>
                                        <td class="product-price">
                                            {{ \Cart::session(auth()->id())->get($item->id)->getPriceSum() }}
                                        </td>
                                        <td class="product-quantity">
                                            <form action="{{ route('cart.update', $item->id) }}">
                                                <input name="quantity" type="number" value="{{ $item->quantity }}">
                                                <input type="submit" value="Save">
                                            </form>
                                        </td>
                                        <td class="product-remove">
                                            <a href="{{ route('cart.destroy', $item->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="buttons-cart--inner">
                                    <div class="buttons-cart">
                                        <a href="#">Continue Shopping</a>
                                    </div>
                                    <div class="buttons-cart checkout--btn">
                                        <a href="{{ route('cart.checkout') }}">checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="ht__coupon__code">
                                    <span>enter your discount code</span>
                                    <div class="coupon__box">
                                        <input type="text" placeholder="">
                                        <div class="ht__cp__btn">
                                            <a href="#">enter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                                <div class="htc__cart__total">
                                    <h6>cart total</h6>
                                    <div class="cart__desk__list">
                                        <ul class="cart__desc">
                                            <li>cart total</li>
                                            <li>tax</li>
                                            <li>shipping</li>
                                        </ul>
                                        <ul class="cart__price">
                                            <li>$909.00</li>
                                            <li>$9.00</li>
                                            <li>0</li>
                                        </ul>
                                    </div>
                                    <div class="cart__total">
                                        <span>order total</span>
                                        <span>${{ \Cart::session(auth()->id())->getTotal() }}</span>
                                    </div>
                                    <ul class="payment__btn">
                                        <li class="active"><a href="#">payment</a></li>
                                        <li><a href="#">continue shopping</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
