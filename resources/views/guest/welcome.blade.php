@extends('layouts.app')

@section('content')

    <!-- Carousel section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 image-fluid" src="public/image/1.jfif" >
                <div class="overlay">
                    <div class="carousel-caption d-md-block">
                        <h1 style="font-size:5vw;">Welcome to online furniture shopping platform <b>OurFurniture</b></h1>
                        <button type="button" class="btn btn-outline-success">
                            <a class="link" href="{{ url('/product') }}">Get Started</a>
                        </button>
                        <button type="button" class="btn btn-outline-success">
                            <a href="{{ route('login') }}">Login/Signup</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 image-fluid" src="public/image/2.jfif" >
                <div class="overlay">
                    <div class="carousel-caption d-md-block">
                        <h1 style="font-size:5vw;">Want to see more about us?</h1>
                        <button type="button" class="btn btn-outline-success">
                            <a class="link" href="#about">About us</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 image-fluid" src="public/image/4.jfif">
                <div class="overlay">
                    <div class="carousel-caption d-md-block">
                    <h1 style="font-size:5vw;">Have any query and want to contact directly?</h1>
                        <button type="button" class="btn btn-outline-success">
                            <a class="link" href="#contact">Contact</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About section -->
    <div id="about">
        <div class="conatiner-fluid about" >
            <h1>About Us</h1>
        </div>
        <div class="row container-fluid about-body">
            <div class="col-sm-6">
                <div class="content">  
                    <p>
                        OurFurniture is a web Based application which serves as the online furniture shop.
                        OurFurniture System provides a list of furniture products displayed online.
                        The user may browse through these products as per categories.
                        If the user likes a product, he may add it to his shopping cart.
                        For this user need to login in the system.
                    </p>
                </div>
            </div>
            <div class="col-sm-1">

            </div>
            <div class="col-sm-5">
                <img src="public/image/bulb.jfif" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
    
        <!-- Contact section -->
    <div class="container-fluid contact" id="contact">
        <div class="row">
            <div class="col-sm-3 contact-left">
                <div class="image">
                    <img src="public/image/mail.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="container contact-left-content">
                    <p>In order to contact-us, you can simply leave the message through by filling up the contact-form or through the social medias.
                        You can also contact us by following method.
                        <br>
                        E-mail: someone@gmail.com <br>
                        Phone : +977 98213213
                         </p>
                </div>

            </div>
            <div class="col-sm-9 contact-right">
                <div class="container-fluid contact-right-head">
                    <h1>Contact Us</h1>
                </div>
                <div class="container-fluid contact-right-content">
                    <form action="">
                        <input type="text" name="subject" class="form-control" placeholder="Enter Subject"><br><br>
                        <textarea class="form-control" rows="5" name="message" placeholder="Enter message"></textarea><br><br>
                        <input type="submit" name="" value="Submit" class="pull-left">
                    </form>
                </div>
            </div>
        </div>
    </div>


    
@endsection
