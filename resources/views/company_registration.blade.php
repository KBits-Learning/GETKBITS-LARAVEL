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
                {!! Form::open(['route'=>'companyRegistrationForm']) !!}
                    <div class="form-group-kbits {{ $errors->has('user') ? 'has-error' : '' }}">
                        <div class="form-label-group-kbits">
                        {!! Form::label('Company Name:') !!}
                        {!! Form::text('name', old('name'), ['class'=>'form-control-kbits', 'placeholder'=>'']) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group-kbits {{ $errors->has('user') ? 'has-error' : '' }}">
                        <div class="form-label-group-kbits">
                        {!! Form::label('Company Size:') !!}
                        {!! Form::text('size', old('size'), ['class'=>'form-control-kbits', 'placeholder'=>'']) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('size') }}</span>
                    </div>
                    <div class="form-group-kbits {{ $errors->has('user') ? 'has-error' : '' }}">
                        <div class="form-label-group-kbits">
                        {!! Form::label('Industry:') !!}
                        {!! Form::text('industry', old('industry'), ['class'=>'form-control-kbits', 'placeholder'=>'']) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('industry') }}</span>
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="form-group-login-btn">
                <button class="fancy-btn">Create Team</button>
            </div>
        </div>
        <div class="login-img col">
            <div class="login-legend">
                <h1 class="login-action">
                    First things first
                </h1>
                <h2 class="login-action-sub">
                    Let's set your team up.
                </h2>
            </div>
            <img class="login-reg" src="images/company-registration-image.svg">
        </div>
    </div>    
</body>
</html>
