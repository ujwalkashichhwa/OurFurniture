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
				
				<h1>Edit User information</h1>
				{!! Form::open(['action' => ['UserController@update', $user->id], 'method' =>'post']) !!}
					<div class="form-group">
						{{Form::label('name', 'Edit Name of User')}}
						{{form::text('name', $user->name, ['class' =>'form-control', 'placeholder'=>'Enter the name of User'])}}
					</div>
					<div class="form-group">
						{{Form::label('email', 'Edit Email of user')}}
						{{form::email('email', $user->email, ['class' =>'form-control', 'placeholder'=>'Enter email'])}}
					</div>
					<div class="form-group">
						{{Form::label('usertype', 'Edit usertype')}}
                        <br>
						{{form::select('usertype', ['admin'=>'Admin', 'user'=>'User'])}}	
					</div>

                    {{form::hidden('_method','PUT')}}

					{{form::submit('Submit', ['class' => 'btn btn-primary'])}}
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
