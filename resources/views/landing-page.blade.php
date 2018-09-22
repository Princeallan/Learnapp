@extends('layouts.master)

@section('content')
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="blog-header-logo text-dark" href="#"><h1>WadNetwork</h1></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">

                <div class="nav-scroller py-1 mb-2">
                    <nav class="nav d-flex justify-content-end">
                        <a class="p-2 text-muted" href="#">Overview</a>
                        <a class="p-2 text-muted" href="#">About</a>
                        <a class="p-2 text-muted" href="#">Contact Us</a>

                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
        <div class="carousel-inner" style="height: 600px;">
            <div class="carousel-item active" style="height: inherit;">
                <img class="d-block w-100" src="{{asset('img/Magazine97.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/abo.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/Magazine97.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/Magazine97.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="card-link">Download</a>
                    <a href="#" class="card-link">Read</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/Magazine97.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="card-link">Download</a>
                    <a href="#" class="card-link">Read</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/Magazine97.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="card-link">Download</a>
                    <a href="#" class="card-link">Read</a>
                </div>
            </div>
        </div>

    </div>

    <div class="team">
        <div class="container">
            <h1 class="text-center">Issues</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 item">
                    <img src="{{asset('img/Magazine97.jpg')}}" class="img-fluid" alt="team">
                    <div class="des">
                        Magazine Title 1
                    </div>
                    <a href="#">Download</a> |
                    <a href="#">Read</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 item">
                    <img src="{{asset('img/Magazine97.jpg')}}" class="img-fluid" alt="team">
                    <div class="des">
                        Magazine Title 2
                    </div>
                    <a href="#">Download</a> |
                    <a href="#">Read</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 item">
                    <img src="{{asset('img/Magazine97.jpg')}}" class="img-fluid" alt="team">
                    <div class="des">
                        Magazine Title 3
                    </div>
                    <a href="#">Download</a> |
                    <a href="#">Read</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-section" style="display: flex;justify-content: center;align-items: center;margin: 5em;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 item">
                <p>
                    <a href="#">fb</a>
                    <a href="#">fb</a>
                </p>
            </div>
        </div>

    </div>
@endsection
