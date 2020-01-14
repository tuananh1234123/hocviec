<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.png">

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


        <form class="form-signin" action="{{ route('login') }}" method="POST">
            @csrf
            <h2 class="form-signin-heading">sign in now</h2>
            <div class="login-wrap">

                <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus />

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message}}</strong>
                </span>

                @enderror


                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Password" autofocus />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label class="checkbox">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}> Remember me
                    <span class="pull-right">

                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                    </span>
                </label>
                <button type="submit" class="btn btn-lg btn-login btn-block">Sign in</button>

                <div class="registration">
                    Don't have an account yet?
                    @if (Route::has('register'))
                    <a class="" href="{{ route('register') }}">
                        Create an account
                    </a>
                    @endif
                </div>

            </div>
        </form>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"
            class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off"
                            class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-success" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->


    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="{{ asset('admin') }}/js/jquery.js"></script>
    <script src="{{ asset('admin') }}/bs3/js/bootstrap.min.js"></script>

</body>

</html>