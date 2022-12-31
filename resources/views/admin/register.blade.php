
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register User</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset ('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset ('style/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{ route('register.action') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                        </div>
                        <div class="mb-3">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                        </div>
                        <div class="mb-3">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" />
                        </div>
                        <div class="mb-3">
                            <label>Password Confirmation<span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password_confirm" />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Register</button>
                            <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="{{url ('admin.login')}}"> Sign in</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('style/assets/js/main.js')}}"></script>


</body>
</html>
