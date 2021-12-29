@extends('layouts.master_front')

@section('front_content')   


<section class="authentication_sec">

        <div class="container">
          <div class="auth_inner">


          <div class="row justify-content-center align-items-start">

            <div class="col-lg-12">
               @if(session('success')) <div class="alert alert-success alert-dismissible fade
            show" role="alert"> <strong>{{ session('success') }}</strong> <button
            type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button> </div>
            @endif
            
              <div class="auth_left sign_up_auth">
                    <h1>Not registered? Create now!</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500syour order history, and much more.</p>
               
               <form action="{{ route('auth.save') }}" method="POST">
              @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" name="name" placeholder="Full Name*">
                  </div>
                  <div class="col-lg-6">
                    <input type="email" name="email" placeholder="Email Id*">
                  </div>
                </div>


                <div class="row">

                  <div class="col-lg-6">
                    <input type="number" name="phone" placeholder="Phone Number*">
                  </div>
                  <div class="col-lg-6">
                    <input type="text" name="salary" placeholder="Desired salary*">
                  </div>
                  
                </div>


                <div class="row">
                  <div class="col-lg-12">
                    <textarea placeholder="Describe Your Self*"></textarea>
                  </div>
                </div>


                <div class="row">
                  <div class="col-lg-4"><input type="text" name="city" placeholder="City"></div>
                  <div class="col-lg-4"><input type="text" name="state" placeholder="State"></div>
                  <div class="col-lg-4"><input type="text" name="country" placeholder="country"></div>
                </div>


                <div class="row align-items-center birth_date">
                  <div class="pl-3">Age (Optional) :</div>
                  <div class="pl-3"><input type="date" name="age" placeholder="Day"></div>
                </div>


                <div class="row">
                  <div class="col-lg-6">
                    <input type="Password" name="password" placeholder="Password*">
                  </div>
                  <div class="col-lg-6">
                    <input type="Password" name="confirm_password" placeholder="Confirm Password*">
                  </div>
                </div>
                 
                 

                 <ul class="check_box">
                   <li>
                      <span><input type="checkbox" name=""></span><span>Tele-Commute Only</span>
                    </li>
                   <li>
                     <input type="submit" value="submit">
                   </li>
                   
                 </ul>
               </form>
                    <h6 class="text-center">or sign up with:</h6>
               <ul class="social">
                  <li><a href="/auth/github/redirect"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                  <li><a href=""><i class="fa fa-stack-overflow" aria-hidden="true"></i></a></li>
                  <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
               </ul>
              </div>
            </div>

             

          </div>

        </div>
        
      </section>

      @endsection