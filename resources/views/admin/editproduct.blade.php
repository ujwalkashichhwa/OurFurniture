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

				@if(count($furniture)>0)
					<table class="table">
						<tr>
							<td>Name</td>
							<td>Category</td>
						</tr>

						@foreach($furniture as $row)
							<tr>
								<td>{{$row->name}}</td>
								<td>{{$row->category}}</td>
								<td>
									<a href="editproduct/{{$row->id}}/edit" class="btn btn-warning">Edit</a>
								</td>
								<td>
									{!! Form::open(['action' => ['EditProductController@destroy', $row->id], 'method' =>'post']) !!}
										{{form::hidden('_method', 'DELETE')}}
										{{form::submit('Delete',['class' => 'btn btn-danger'])}}
									{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</table>
				@else
					<p>No product is Found</p>
				@endif
			</div>
		</div>
	</div>
@endsection
