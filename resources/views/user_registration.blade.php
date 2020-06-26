<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login Kbits</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body id="indexLogin">
<!-- Navigation Bar TBD -->
    <nav class="navbar fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="/">Kbits</a>
    </nav>
    <div class="login-container">
        <div class="login-img">
            <img class src="images/kbits-login.svg">
        </div>
        @if(session('success'))
           <div class="alert alert-success">
             {{ session('success') }}
           </div>
        @endif
        <div class="form-signin">  
            {!! Form::open(['route'=>'userRegistrationForm']) !!}
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('First Name:') !!}
                    {!! Form::text('first_name', old('first_name'), ['class'=>'form-control', 'placeholder'=>'Enter First Name']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                </div>
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('Last Name:') !!}
                    {!! Form::text('last_name', old('last_name'), ['class'=>'form-control', 'placeholder'=>'Enter Last Name']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                </div>
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('Email:') !!}
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <div class="form-label-group">
                    {!! Form::label('Password:') !!}
                    {!! Form::text('password', old('pass'), ['class'=>'form-control', 'placeholder'=>'Enter Password']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Login</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>    
</body>
</html>
