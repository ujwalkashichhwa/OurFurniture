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
                <h1>View New order of Furniture</h1>
                
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Name of furniture</th>
                                    <th>Furniture Category</th>
                                    <th>Material To be used</th>
                                    <th>color</th>
                                    <th>Detail</th>
                                    <!-- <th>Name of user</th>
                                    <th>Address</th>
                                    <th>Contact</th> -->
                                </tr>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->category}}</td>
                                        <td>{{$order->material}}</td>
                                        <td>{{$order->color}}</td>
                                        <td>{{$order->detail}}</td>
                                        <!-- <td>{{$order->username}}</td>
                                        <td>{{$order->address}}</td>
                                        <td>{{$order->contact}}</td> -->
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
