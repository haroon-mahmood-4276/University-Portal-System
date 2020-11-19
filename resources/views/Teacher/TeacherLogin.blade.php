@extends('Others.Master')

@section('PageTitle', 'Teacher Login')

@section('content')
    <div class="container col-lg-5 my-5 py-3" style=" background-color: #224172; color: white; border-radius:  10px;">

        @if (session('Msg'))
            <div class="alert alert-{{ session('Msg.MsgType') }} alert-dismissible fade show" role="alert">
                <strong>{{ session('Msg.MsgD') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </strong>
            </div>
            {{ Session::forget('Msg') }}
        @endif

        <form action="/teacher/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="InputEmail">User ID</label>
                <div class="input-group mb-3">
                    <input type="text" id="txtUserID" name="txtUserID" class="form-control" placeholder="User ID"
                        maxlength="11" minlength="11" aria-label="User ID" aria-describedby="basic-addon2" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon">@uni.edu.pk</span>
                    </div>
                </div>
            </div>

            <div class="form-group">

                <label for="InputPassword">Password</label>
                <!-- <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
                <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password"
                    minlength="6" required>

            </div>
            <div class="form-actions">
                <button type="submit" name="submit" class="btn btn-UNi" id="btnLogin"><i class="fas fa-sign-in-alt"
                        style="color: white;"></i>
                </button>
            </div>
        </form>
    </div>


    <div class="container blink" style="margin-top: 10vh;">
        <img class="img-fluid" src="{{ asset('images/Brand-1.png') }}" alt="Brand Logo">
    </div>

@endsection
