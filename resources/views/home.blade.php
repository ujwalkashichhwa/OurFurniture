@extends('layouts.user.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif 
    <!-- Main body section -->
    <div class="container-fluid main" id="main">
        <div class="row">

            <!--filter section/ leftmost part --> 
            <div class="col-sm-3 left">
                <div class="card">
                    <div class="card-header">Quick Menu</div>
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-lr-tab" data-toggle="pill" href="#v-pills-lr" role="tab" aria-controls="v-pills-lr" aria-selected="true">LivingRoom Furniture</a>
                            <a class="nav-link" id="v-pills-br-tab" data-toggle="pill" href="#v-pills-br" role="tab" aria-controls="v-pills-br" aria-selected="false">BedRoom Furniture</a>
                            <a class="nav-link" id="v-pills-dr-tab" data-toggle="pill" href="#v-pills-dr" role="tab" aria-controls="v-pills-dr" aria-selected="false">DiningRoom Furniture</a>
                            <a class="nav-link" id="v-pills-kr-tab" data-toggle="pill" href="#v-pills-kr" role="tab" aria-controls="v-pills-kr" aria-selected="false">KitchenRoom Furniture</a>
                            <a class="nav-link" id="v-pills-cr-tab" data-toggle="pill" href="#v-pills-cr" role="tab" aria-controls="v-pills-cr" aria-selected="false">ChildrenRoom Furniture</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content list section/ middle part -->
            <div class="col-sm-9 middle">
                @include('inc.message')
                <!-- livingRoom furniture listing section -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-lr" role="tabpanel" aria-labelledby="v-pills-lr-tab">
                        <div class="row">
                            @if(count($furniture)>0 )
                                @foreach($furniture as $row)
                                    @if($row->category =="living-room")
                                        <div class="col-sm-4 col-lg-3 col-md-6">
                                            <div class="thumbnail">
                                                <a href="product/{{$row->id}}">
                                                    <img src="public/image/{{$row->image}}" class="img-fluid" alt="Responsive image"   />
                                                </a>
                                                <div class="caption">
                                                    <h4 class="pull-right">Rs.{{$row->price}}</h4>
                                                    <h4>{{$row->name}}</h4>
                                                    <p>{{$row->detail}}</p>
                                                </div>
                                                <div class="atc">
                                                    <a href="{{route('product.shoppingCart', ['id' => $row->id]) }}" class="btn btn-success" style="width:100%;">
                                                            Add to Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <p>Product(s) not found...</p>
                            @endif
                        
                        </div>
                    
                    </div>

                    <div class="tab-pane fade" id="v-pills-br" role="tabpanel" aria-labelledby="v-pills-br-tab">
                        <div class="row">
                            @if(count($furniture)>0 )
                                @foreach($furniture as $row)
                                    @if($row->category =="bed-room")
                                        <div class="col-sm-4 col-lg-3 col-md-6">
                                            <div class="thumbnail">
                                                <a href="product/{{$row->id}}">
                                                    <img src="public/image/{{$row->image}}" class="img-fluid" alt="Responsive image"   />
                                                </a>
                                                <div class="caption">
                                                    <h4 class="pull-right">Rs.{{$row->price}}</h4>
                                                    <h4>{{$row->name}}</h4>
                                                    <p>{{$row->detail}}</p>
                                                </div>
                                                <div class="atc">
                                                    <a href="{{route('product.shoppingCart', ['id' => $row->id]) }}" class="btn btn-success" style="width:100%;">
                                                            Add to Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <p>Product(s) not found...</p>
                            @endif
                        
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-dr" role="tabpanel" aria-labelledby="v-pills-dr-tab">
                        <div class="row">
                            @if(count($furniture)>0 )
                                @foreach($furniture as $row)
                                    @if($row->category =="dining-room")
                                        <div class="col-sm-4 col-lg-3 col-md-6">
                                            <div class="thumbnail">
                                                <a href="product/{{$row->id}}">
                                                    <img src="public/image/{{$row->image}}" class="img-fluid" alt="Responsive image"   />
                                                </a>
                                                <div class="caption">
                                                    <h4 class="pull-right">Rs.{{$row->price}}</h4>
                                                    <h4>{{$row->name}}</h4>
                                                    <p>{{$row->detail}}</p>
                                                </div>
                                                <div class="atc">
                                                    <a href="{{route('product.shoppingCart', ['id' => $row->id]) }}" class="btn btn-success" style="width:100%;">
                                                            Add to Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <p>Product(s) not found...</p>
                            @endif
                        
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-kr" role="tabpanel" aria-labelledby="v-pills-kr-tab">
                        <div class="row">
                            @if(count($furniture)>0 )
                                @foreach($furniture as $row)
                                    @if($row->category =="kitchen-room")
                                        <div class="col-sm-4 col-lg-3 col-md-6">
                                            <div class="thumbnail">
                                                <a href="product/{{$row->id}}">
                                                    <img src="public/image/{{$row->image}}" class="img-fluid" alt="Responsive image"   />
                                                </a>
                                                <div class="caption">
                                                    <h4 class="pull-right">Rs.{{$row->price}}</h4>
                                                    <h4>{{$row->name}}</h4>
                                                    <p>{{$row->detail}}</p>
                                                </div>
                                                <div class="atc">
                                                    <a href="{{route('product.shoppingCart', ['id' => $row->id]) }}" class="btn btn-success" style="width:100%;">
                                                            Add to Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <p>Product(s) not found...</p>
                            @endif
                        
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-cr" role="tabpanel" aria-labelledby="v-pills-cr-tab">
                        <div class="row">
                            @if(count($furniture)>0 )
                                @foreach($furniture as $row)
                                    @if($row->category =="children-room")
                                        <div class="col-sm-4 col-lg-3 col-md-6">
                                            <div class="thumbnail">
                                                <a href="product/{{$row->id}}">
                                                    <img src="public/image/{{$row->image}}" class="img-fluid" alt="Responsive image"   />
                                                </a>
                                                <div class="caption">
                                                    <h4 class="pull-right">Rs.{{$row->price}}</h4>
                                                    <h4>{{$row->name}}</h4>
                                                    <p>{{$row->detail}}</p>
                                                </div>
                                                <div class="atc">
                                                    <a href="{{route('product.shoppingCart', ['id' => $row->id]) }}" class="btn btn-success" style="width:100%;">
                                                            Add to Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <p>Product(s) not found...</p>
                            @endif
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
