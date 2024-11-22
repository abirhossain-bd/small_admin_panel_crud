<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="login">
    <div>
        <div class="login_wrapper">

            <div id="register" class="animate form">
                <section class="login_content">
                    <form action="{{ route('user.register') }}" method="POST">
                        @csrf
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ old('first_name') }}" />
                            @error('first_name')
                                <div style="margin-bottom:10px" class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name"  value="{{ old('last_name') }}"/>
                            @error('last_name')
                                <div style="margin-bottom:10px " class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" />
                            @error('email')
                                <div style="margin-bottom:10px " class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                            @error('password')
                                <div style="margin-bottom:10px " class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="number" name="mobile" class="form-control" placeholder="Mobile Number" value="{{ old('mobile') }}" />
                            @error('mobile')
                                <div style="margin-top:10px" class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="{{ route('login') }}" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> User Register! </h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
