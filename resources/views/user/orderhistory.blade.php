@extends('layouts.user.app')

@section('content')
    <div class="container">
        <h1>My orders history</h1>
        
        @foreach($orders as $order)
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                <span class="badge">{{$item['price']}}</span>
                                {{$item['item']['name']}} | {{$item['qty']}} units
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                    <strong>Total Price: Rs. {{$order->cart->totalPrice}}</strong>
                </div>
            </div>
        @endforeach

    </div>
@endsection
