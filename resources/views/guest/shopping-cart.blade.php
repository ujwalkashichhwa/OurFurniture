@extends('layouts.app1')

@section('content')
    <div class="container">
        @if(Session::has('cart'))
            <div class="row">
                <div class="col-sm-6">
                    <table class="table">
                        <tr>
                            <th>Name of Furniture</th>
                            <th>Quantity of Furniture</th>
                            <th>Price of Furniture</th>
                        </tr>   
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product['item']['name']}}</td>
                                <td>{{$product['qty']}}</td>
                                <td>Rs. {{$product['price']}}</td>
                                <td>
                                    <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action 
                                        <span class="caret">
                                        </span> 
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">Reduce by 1</a></li>
                                        <li><a href="#">Reduce by All</a></li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <strong>Total: {{$totalPrice}}</strong>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('checkout')}}" type="button" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-sm-6">
                    <h2>No Items in Cart</h2>
                </div>
            </div>
        @endif
    </div>
@endsection
