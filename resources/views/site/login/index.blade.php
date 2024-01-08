<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('global')}}/colorlib-regform-8/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('global')}}/colorlib-regform-8/css/style.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="login-form" class="signup-form" action="{{ route('site.login.getIndex') }}">
                        @csrf
                        <h2 class="form-title">Login</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Don't have an account? <a href="{{ route('site.register.getIndex') }}" class="loginhere-link">Sign Up here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('global')}}/colorlib-regform-8/js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('#login-form').submit(function (e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function (response) {
                        // Handle the successful login response
                        console.log(response);
                        // Redirect or perform other actions as needed
                    },
                    error: function (error) {
                        // Handle the login error
                        console.log(error);
                        // Display error messages or take other actions as needed
                    }
                });
            });
        });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>