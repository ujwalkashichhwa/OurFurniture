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
            
				@include('inc.message')
				
				<h1>Edit information of  Furniture</h1>
				{!! Form::open(['action' => ['EditProductController@update', $furniture->id], 'method' =>'post']) !!}
					<div class="form-group">
						{{Form::label('name', 'Edit Name of Furniture')}}
						{{form::text('name', $furniture->name, ['class' =>'form-control', 'placeholder'=>'Enter the name of Furniture'])}}
					</div>
					<div class="form-group">
						{{Form::label('price', 'Edit Price of Furniture')}}
						{{form::number('price', $furniture->price, ['class' =>'form-control', 'placeholder'=>'Enter price of Furniture'])}}
					</div>
					<div class="form-group">
						{{Form::label('category', 'Edit Category of Furniture')}}
						<br>
						{{Form::select('category', ['living-room' => 'Living Room', 'dining-room' => 'Dining Room', 'kitchen-room'=> 'Kitchen Room', 'children-room' => 'Children Room', 'bed-room' => 'Bed Room'], ['class'=>'form-control'])}}
					</div>
					<div class="form-group">
						{{Form::label('material', 'Edit Material Used')}}
						{{form::text('material', $furniture->material, ['class' =>'form-control', 'placeholder'=>'Material Used'])}}
					</div>
					<div class="form-group">
						{{Form::label('color', 'Edit Color of Furniture')}}
						{{form::text('color', $furniture->color, ['class' =>'form-control', 'placeholder'=>'Enter the color of Furniture'])}}
					</div>
					<div class="form-group">
						{{Form::label('dimension', 'Edit Dimension of Furniture')}}
						{{form::text('dimension', $furniture->dimension, ['class' =>'form-control', 'placeholder'=>'Enter the Dimension of Furniture'])}}
					</div>
					<div class="form-group">
						{{Form::label('brand', 'Edit Brand of Furniture')}}
						{{form::text('brand', $furniture->brand, ['class' =>'form-control', 'placeholder'=>'Enter the brand of Furniture'])}}
					</div>
					<div class="form-group">
						{{Form::label('image', 'Image of Furniture')}} <br>
						{{form::file('image')}}
					</div>
					<div class="form-group">
						{{Form::label('detail', 'Edit detail of Furniture')}}
						{{form::textarea('detail', $furniture->detail, ['class' =>'form-control', 'placeholder'=>'Enter the other detail of Furniture'])}}
					</div>

                    {{form::hidden('_method','PUT')}}

					{{form::submit('Submit', ['class' => 'btn btn-primary'])}}
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
