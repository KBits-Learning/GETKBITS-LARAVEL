<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8"/>
        <title>Login Kbits</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/kbits/login.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <head/>    
    <body id="indexLogin">
        <!-- <nav class="navbar fixed-top navbar-light bg-light">
          <a class="navbar-brand" href="/">Kbits</a>
        </nav> -->
        <div class="login-container col-md-5">   
            <img class="main-logo" src="images/logo-kbits-rounded.svg">
            <div class="login-content">
                {!! Form::open(['route'=>'loginForm']) !!}
                <!--email login seccion-->
                <div class = "form-group-kbits {{ $errors->has('email') ? 'has-error' : '' }}" >
                    <div class="form-label-group-kbits">
                        {!! Form::label('Email') !!}
                        {!! Form::text('email', old('email'), ['class'=>'form-control-kbits', 'placeholder'=>'']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('email') }}</span>                   
                </div>
                <!--password login seccion-->
                <div class="form-group-kbits {{ $errors->has('password') ? 'has error' : '' }}">
                    <div  class="form-label-group-kbits"> 
                        {!! Form::label('Password') !!}   
                        {!! Form::text('password', old('password'), ['class'=>'form-control-kbits', 'placeholder'=>'']) !!}
                    </div>
                        <span class="text-danger">{{ $errors->first('password') }}</span>  
                </div>
                <!--login button-->
                <div class="form-group-login-btn">
                    <button class="fancy-btn">Login</button>
                </div>
              {!!Form::close()!!}
            </div>
        </div> 
        <div class="login-img col-md-7">
            <img class="login-reg" src="images/kbits-login.svg">
        </div>  
        <!-- wrong user messege-->    
        @if(session('status'))
            {{ session('status') }}
        @endif
        <script src="/js/app.js"></script>
    </body>
    </head>    
</html>
