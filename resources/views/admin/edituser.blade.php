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
				<div container-fluid>
					<h1>You can manage the current users form this section</h1>
				</div>
				@if(count($user)>0)
					<table class="table">
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Usertype</th>
						</tr>
						@foreach($user as $row)
							<tr>
								<td>{{$row->name}}</td>
								<td>{{$row->email}}</td>
								<td>{{$row->usertype}}</td>
								<td><a href="edituser/{{$row->id}}/edit" class="btn btn-warning">Edit</a></td>
								<td>
									{!! Form::open(['action' => ['UserController@destroy', $row->id], 'method' =>'post']) !!}
											{{form::hidden('_method', 'DELETE')}}
											{{form::submit('Delete',['class' => 'btn btn-danger'])}}
										{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</table>
				@else
					<p>No user found</p>
				@endif
			</div>
		</div>
	</div>
@endsection
