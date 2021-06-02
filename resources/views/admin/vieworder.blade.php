@extends('layouts.admin.header')

@section('content')

	<div class="container-fluid">
        <div class="row">
			<div class="col-lg-2 col-md-4 col-sm-4">
				<div class="card">
					<div class="card-body">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
						<a href="{{ url('/edituser') }}" class="nav-link">Manage Users</a>
						<a href="{{ url('/dashboard/create') }}" class="nav-link">New Product</a>
						<a href="{{ url('/editproduct') }}" class="nav-link">Edit product</a>
						<a href="{{ url('/vieworder') }}" class="nav-link">Orderd Purchased</a>
						<a href="{{ url('/neworder') }}" class="nav-link">Customer's Orders</a>
					</div>
				</div>
			</div>
			<div class="col-lg-10 col-md-8 col-sm-8">
                <h1>View the purchased Furnitures</h1>
                @foreach($orders as $order)
                    <div class="card">
                        <div class="card-header">
                            <strong>Name of client: {{$order->name}}</strong><br>
                            <strong>Address of client: {{$order->address}}</strong>
                        </div>
                        <div class="card-body">
                            {{$order->cart}}
                        </div>
                    </div>
                @endforeach
            </div>
        <div>
    </div>
@endsection
