@extends('layouts.user.app')

@section('content')
    <div class="container">
        <h1>Give Order of furniture</h1>

        @include('inc.message')

        {!! Form::open(['action' => 'HomeController@store', 'method' =>'post']) !!}
            <div class="form-group">
                {{Form::label('username', 'Name of User')}}
                {{form::text('username', '', ['class' =>'form-control', 'placeholder'=>'Enter Your Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('address', 'Address')}}
                {{form::text('address', '', ['class' =>'form-control', 'placeholder'=>'Enter Address'])}}
            </div>
            <div class="form-group">
                {{Form::label('contact', 'Contact')}}
                {{form::text('contact', '', ['class' =>'form-control', 'placeholder'=>'Enter contact'])}}
            </div>
            <div class="form-group">
                {{Form::label('name', 'Name of Furniture')}}
                {{form::text('name', '', ['class' =>'form-control', 'placeholder'=>'Enter the name of Furniture'])}}
            </div>
            <div class="form-group">
                {{Form::label('category', 'Category of Furniture')}}
                <br>
                {{Form::select('category', ['living-room' => 'Living Room', 'dining-room' => 'Dining Room', 'kitchen-room'=> 'Kitchen Room', 'children-room' => 'Children Room', 'bed-room' => 'Bed Room'], ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('material', 'Material Used')}}
                {{form::text('material', '', ['class' =>'form-control', 'placeholder'=>'Material Used'])}}
            </div>
            <div class="form-group">
                {{Form::label('color', 'Color of Furniture')}}
                {{form::text('color', '', ['class' =>'form-control', 'placeholder'=>'Enter the color of Furniture'])}}
            </div>
            <div class="form-group">
                {{Form::label('dimension', 'Dimension of Furniture')}}
                {{form::text('dimension', '', ['class' =>'form-control', 'placeholder'=>'Enter the Dimension of Furniture'])}}
            </div>
            <div class="form-group">
                {{Form::label('detail', 'Other detail of Furniture')}}
                {{form::textarea('detail', '', ['class' =>'form-control', 'placeholder'=>'Enter the other detail of Furniture'])}}
            </div>
            {{form::submit('Submit', ['class' => 'btn btn-primary'])}}
            
        {!! Form::close() !!}
    </div>
@endsection
