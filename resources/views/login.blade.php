<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en"> 
    <head>
        <meta charset="utf-8"/>
        <title>KBITS</title>
    <head/>    
    <body id="indexLogin">
        <nav>
            <a>Welcome to kbits<a/>
        </nav>
        <div class="form-sigin">
            {!! form::open(['route'=>'loginForm']) !!}
            <!--email login seccion-->
             <div class = "form-group {{$error->has('email') ? 'has-error' : '' }}" >
                 <div class="form-label-group">
                    {!! Form::label('Email:') !!}
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('email') }}</span>                   
             </div>
             <!--password login seccion-->
             <div class="form-group {{ $errors->has('password') ? 'has error' : '' }}">
                  <div  class="form-label-group"> 
                    {!! Form::label('password:') !!}   
                    {!! Form::Text('pasword', old('pass'), ['class'=>'form-control', 'placeholder'=>'Enter Password']) !!}
                  </div>
                  <span class="text-danger">{{ $errors->first('password') }}</span>  
             </div>
             <!--login button-->
             <div class="form-group">
                 <button>LOGIN</button>
             </div>
          {!!Form::close()!!}   
        </div>    
            
 
 <!-- wrong user messege-->    
        @if(session('status'))
        {{ session('status')}}
        @endif
    <body/>    
=======
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
        <div class="form-signin">  
            {!! Form::open(['route'=>'loginForm']) !!}
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('Email:') !!}
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
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
>>>>>>> 723bd7462fb43556cad040e5cbf596ce728794f0
