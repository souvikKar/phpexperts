@extends('layouts.master_front')

@section('front_content')    
 
 <section class="authentication_sec">

        <div class="container">
          <div class="auth_inner">


          <div class="row justify-content-center align-items-start">

            <div class="col-lg-6">
            @if(session('success')) <div class="alert alert-success alert-dismissible fade
            show" role="alert"> <strong>{{ session('success') }}</strong> <button
            type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button> </div>
            @endif
            
              <div class="auth_left">
                    <h1>Sign in to your Account</h1>
            <p>Log in to your account to discover all great features</p>
               <form method="POST" action="{{ route('auth.check') }}">
                 @csrf
                  
                 <input type="email" name="email" placeholder="Username or Email address">
                 @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif

                
                 <input type="password" name="password" placeholder="Password">
                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                 <ul>
                   <li>
                     <input type="submit" value="submit">
                   </li>
                    <li>
                      <input type="checkbox" name=""><span>Remember me</span>
                       <a href="">Forgot your Password?</a>
                    </li>
                 </ul>
               </form>
                    <h6 class="text-center">or login with:</h6>
               <ul class="social">
                 <li><a href=""><i class="fa fa-github" aria-hidden="true"></i></a></li>
                  <li><a href=""><i class="fa fa-stack-overflow" aria-hidden="true"></i></a></li>
                  <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
               </ul>
              </div>
            </div>

              <div class="col-lg-6">
                <img src="images/signin.png" alt="" class="img-fluid">
              </div>

          </div>

        </div>
        
      </section>
@endsection