<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login Kbits</title>
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
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
            {!! Form::open(['route'=>'companyRegistrationForm']) !!}
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('Company Name:') !!}
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Company Name']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('Company Size:') !!}
                    {!! Form::text('size', old('size'), ['class'=>'form-control', 'placeholder'=>'Enter Company Size']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('size') }}</span>
                </div>
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('Industry:') !!}
                    {!! Form::text('industry', old('industry'), ['class'=>'form-control', 'placeholder'=>'Enter Industry']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('industry') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Create Team</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>    
</body>
</html>
