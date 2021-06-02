@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Checkout</h1>
                <h3>Your Total Amount is: Rs. {{$total}}</h3>

                <form action="{{route('checkout')}}" method="post">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Card Holder Name</label>
                            <input type="text" name="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Credit Card Number</label>
                            <input type="text" name="card-number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6" style="margin-left:20px;">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration Month</label>
                                    <input type="text" name="card-expiry-month" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-xs-6" style="margin-left:40px;">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration Year</label>
                                    <input type="text" name="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input type="text" name="card-cvc" class="form-control" required>
                        </div>
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
@endsection
