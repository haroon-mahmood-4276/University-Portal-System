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

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body>

    {{-- Header --}}
    {{ View::make('Others.LoginHeader') }}

    {{-- Middle Container --}}

    <div class="container col-lg-5 my-5 py-3" style=" background-color: #224172; color: white; border-radius:  10px;">
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



    <div class="container blink" style="margin-top: 10vh;">
        <center><img class="img-fluid" src="{{ asset('images/Brand-1.png') }}" alt="Brand Logo"></center>
    </div>

    {{-- Footer --}}
    {{ View::make('Others.Footer') }}


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/7c58c9e194.js" crossorigin="anonymous"></script>
</body>

</html>
