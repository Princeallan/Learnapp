@extends('layouts.master)

@section('content')

    <div class="row about">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('img/Magazine97.jpg')}}" class="img-fluid">
            <span class="text-justify-center">S.Web Developer</span>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 desc">

            <h3>Doe John</h3>
            <p>
                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>


@endsection