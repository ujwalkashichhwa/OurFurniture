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
			<div class="col-lg-10 col-md-8 col-sm-8 dashboard-body">
				<h1>Welcome to Admin Dashboard</h1>

				<div class="row card-wrapper">
					<div class="col-sm-6"> 
						<div class="card">
							<div class="card-body">
								<h3>Total Number of User</h3>
								<h1>{{$user}}</h1>
							</div>	
						</div>
					</div>
					<div class="col-sm-6"> 
						<div class="card">
							<div class="card-body">
								<h3>Total Number of Furniture</h3>
								<h1>{{$furniture}}</h1>
							</div>	
						</div>
					</div>
					<div class="col-sm-6"> 
						<div class="card">
							<div class="card-body">
								<h3>Total Purchased Furniture </h3>
								<h1>{{{$purchased}}}</h1>
							</div>	
						</div>
					</div>
					<div class="col-sm-6"> 
						<div class="card">
							<div class="card-body">
								<h3>Total orderd Furniture </h3>
								<h1>{{{$order}}}</h1>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
