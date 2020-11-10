@extends('Others.Master')

@section('PageTitle', 'Home')

@section('PageHeader')
    {{ View::make('Others.LoginHeader') }}
@endsection


@section('content')
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 my-3 text-center">
                <div class="card card-animation">
                    <img class="card-img-top img-fluid" src="{{ asset('images/card/img_avatar1.png') }}" alt="Student image"
                        style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Student Portal</h4>
                        <a href="{{ url('/student/login') }}" class="btn btn-UNi">Open Portal</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-3 text-center">
                <div class="card card-animation">
                    <img class="card-img-top img-fluid" src="{{ asset('images/card/img_avatar2.png') }}" alt="Teacher image"
                        style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Teacher Portal</h4>
                        <a href="{{ url('/teacher/login') }}" class="btn btn-UNi">Open Portal</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-3 text-center">
                <div class="card card-animation">
                    <img class="card-img-top img-fluid" src="{{ asset('images/card/img_avatar3.png') }}" alt="Card image"
                        style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Admin Portal</h4>
                        <a href="{{ url('/admin/login') }}" class="btn btn-UNi">Open Portal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
