<!DOCTYPE html>
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
    </body>
    </head>    
