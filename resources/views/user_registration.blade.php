<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login Kbits</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kbits/login.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body id="indexLogin">
    <div class="row">
        <div class="login-container col-md-5 col-12">
            <img class="main-logo" src="images/logo-kbits-rounded.svg">
            @if(session('success'))
               <div class="alert alert-success">
                 {{ session('success') }}
               </div>
            @endif
            <div class="login-content">  
                {!! Form::open(['route'=>'userRegistrationForm']) !!}
                    <div class="form-group-kbits {{ $errors->has('user') ? 'has-error' : '' }}">
                        <div class="form-label-group-kbits">
                        {!! Form::label('First Name') !!}
                        {!! Form::text('first_name', old('first_name'), ['class'=>'form-control-kbits', 'placeholder'=>'']) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    </div>
                    <div class="form-group-kbits {{ $errors->has('user') ? 'has-error' : '' }}">
                        <div class="form-label-group-kbits">
                        {!! Form::label('Last Name') !!}
                        {!! Form::text('last_name', old('last_name'), ['class'=>'form-control-kbits', 'placeholder'=>'']) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    </div>
                    <div class="form-group-kbits {{ $errors->has('user') ? 'has-error' : '' }}">
                        <div class="form-label-group-kbits">
                        {!! Form::label('Email') !!}
                        {!! Form::text('email', old('email'), ['class'=>'form-control-kbits', 'placeholder'=>'']) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group-kbits {{ $errors->has('email') ? 'has-error' : '' }}">
                        <div class="form-label-group-kbits">
                        {!! Form::label('Password') !!}
                        {!! Form::text('password', old('pass'), ['class'=>'form-control-kbits', 'placeholder'=>'']) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="form-group-login-btn">
                <button class="fancy-btn">Create Account</button>
            </div>
        </div> 
        <div class="login-img col">
                <div class="login-legend">
                    <h1 class="login-action">
                        Almost there!
                    </h1>
                    <h2 class="login-action-sub">
                        Let's now create your account
                    </h2>
                </div>
                <img class="login-reg-vertical" src="images/user-registration.svg">
            </div>
        </div>   
    </div>    
</body>
</html>
