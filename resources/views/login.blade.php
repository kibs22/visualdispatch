<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ url('css/images/logo.png') }}" />
        <title>Visual Dispatch</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="icon" type="image/png" href="{{url('css/images/icons/favicon.ico')}}"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ url('js/vendor/bootstrap/css/bootstrap.min.css') }}" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ url('css/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ url('css/fonts/iconic/css/material-design-iconic-font.min.css') }}" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ url('js/vendor/animate/animate.css') }}" />
        
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ url('js/vendor/css-hamburgers/hamburgers.min.css') }}" />
        
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ url('js/vendor/animsition/css/animsition.min.css') }}" />
       
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ url('js/vendor/select2/select2.min.css') }}" />
       
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ url('js/vendor/daterangepicker/daterangepicker.css') }}" />
      
        <!--===============================================================================================-->
       
        <link rel="stylesheet" type="text/css" href="{{ url('css/css/util.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/css/main.css') }}" />
        
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100" style="background-image: url('/css/images/bg-02.jpeg');">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-49">
                             <img src="{{ url('css/images/logo.png') }}" alt="Nature" class="img-fluid"> 
                             <h2>VISUAL DISPATCH</h2>
                        </span>
                      
                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                            <span class="label-input100">Username</span>
                            <input class="input100" type="text" name="username" placeholder="Type your username">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="password" name="pass" placeholder="Type your password">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        
                        <div class="text-right p-t-8 p-b-31">
                            <a href="#">
                                Forgot password?
                            </a>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <a href="{{url('/dashboard')}}">
                                    <button class="login100-form-btn" type="button">
                                        Login      
                                    </button>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!--===============================================================================================-->
            <script src="{{ url('js/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <!--===============================================================================================-->
            <script src="{{ url('js/vendor/animsition/js/animsition.min.js') }}"></script>
        <!--===============================================================================================-->
            <script src="{{ url('js/vendor/bootstrap/js/popper.js') }}"></script>
            <script src="{{ url('js/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--===============================================================================================-->
            <script src="{{ url('js/vendor/select2/select2.min.js') }}"></script>
        <!--===============================================================================================-->
            <script src="{{ url('js/vendor/daterangepicker/moment.min.js') }}"></script>
            <script src="{{ url('js/vendor/daterangepicker/daterangepicker.js') }}"></script>
           
        <!--===============================================================================================-->
            <script src="{{ url('js/vendor/countdowntime/countdowntime.js') }}"></script>
            
        
            
    </body>
</html>
