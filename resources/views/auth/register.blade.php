<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Login</title>

    <!--Core CSS -->
    <link href="{{ asset('admin') }}/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/bootstrap-reset.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

    <div class="container">
  
        <form class="form-signin" method="POST" action="{{ route('register') }}">
            @csrf

            <h2 class="form-signin-heading">registration now</h2>
            <div class="login-wrap">
                <p>Enter your personal details below</p>
                <input type="text" placeholder="Full Name" id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                    required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="email" placeholder="Email" type="text"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                
                <p> Enter your account details below</p>
                <input id="email" placeholder="Email-Adderss"type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="password" placeholder="Password" type="password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="password-confirm" placeholder="password-confirm" type="password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">

                <label class="checkbox">
                    <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy
                    Policy
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

                <div class="registration">
                    Already Registered.
                    <a class="" href="{{ route('login') }}">
                        Login
                    </a>
                </div>

            </div>

        </form>

    </div>


    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

</body>

</html>