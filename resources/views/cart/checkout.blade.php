@extends('layouts.app')

@section('content')
    <h2>Checkout</h2>

    <h3>Shipping Information</h3>

    <form action="{{route('orders.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="shipping_fullname">Full Name</label>
            <input type="text" name="shipping_fullname" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="shipping_state">State</label>
            <input type="text" name="shipping_state" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="shipping_city">City</label>
            <input type="text" name="shipping_city" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="shipping_zipcode">Zip code</label>
            <input type="number" name="shipping_zipcode" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="shipping_address">Full Address</label>
            <input type="text" name="shipping_address" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="shipping_phone">Mobile</label>
            <input type="text" name="shipping_phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
@endsection
