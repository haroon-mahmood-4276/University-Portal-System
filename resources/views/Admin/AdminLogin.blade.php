<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Admin Portal</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


@extends('Admin.AdminLayout.AdminMaster')

@section('PageTitle', 'Login')

@section('PageHeader')
    {{ View::make('Others.LoginHeader') }}
@endsection


@section('content')
    <div class="container col-lg-5 my-5 py-3" style=" background-color: #224172; color: white; border-radius:  10px;">

        @if (session('Msg'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('Msg.MsgNo') }} - {{ session('Msg.MsgType') }} - {{ session('Msg.MsgD') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        @endif

        <form action="/admin/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="InputEmail">User ID</label>
                <div class="input-group mb-3">
                    <input type="text" id="txtUserID" name="txtUserID" class="form-control" placeholder="User ID"
                        aria-label="User ID" aria-describedby="basic-addon2" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon">@uni.edu.pk</span>
                    </div>
                </div>
            </div>

            <div class="form-group">

                <label for="InputPassword">Password</label>
                <!-- <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
                <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password"
                    required>

            </div>
            <div class="form-actions">
                <button type="submit" name="submit" class="btn btn-UNi" id="btnLogin"><i class="fas fa-sign-in-alt"
                        style="color: white;"></i>
                </button>
            </div>
        </form>
    </div>

@endsection
