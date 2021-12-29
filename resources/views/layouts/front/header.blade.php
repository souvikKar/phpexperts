<header>
         <div class="container-fluid">
            <div class="header-inner">
               <div class="logo">
                  <img src="{{ asset('frontend/dist/images/logo.png') }}" alt="" class="img-fluid">
               </div>
               <div class="nav_menu">
                  
                   <div class="stellarnav">
                     <ul>
                        <li>
                           <a href="{{ route('frontpage') }}">HOME</a>
                        </li>
                        <li><a href="">JOBS</a></li>
                        <li><a href="">RECRUITERS</a></li>
                     </ul>
                  </div>
               </div>
               <div class="signup-bt">
                  <a href="{{ route('register') }}">signup</a>
               </div>
            </div>
         </div>
      </header>