  
  @extends('layouts.master_front')

   @section('front_content')   

   <section class="banner" style="background-image:url('{{ asset('frontend/dist/images/banner.png') }}');">
         <div class="container">
            <h1 class="sec_title">Help Your Dream Job Find You!</h1>
            <p class="section_title">Find jobs on us, the job search app built to help you every step of the way. Get free access to millions of job postings personalize your search and submit job applications</p>
            <div class="inside_banner">
               <form>
                  <div class="form_group_custom">
                           <div class="form-group">
                        <label for="srch"><i class="fa fa-search" aria-hidden="true"></i> Job or keyword</label>
                        <div class="input-group">
                       <input type="seracr" name="" id="srch" class="form-control">
                    </div>
                     </div>
                  </div>
                  <div class="form_group_custom">
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Minimum Salary</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                             <option>$60</option>
                           <option>$35</option>
                           <option>$40</option>
                           <option>$45</option>
                           <option>$50</option>
                              <option>$55</option>
                           <option>$60</option>
                           <option>$65</option>
                           <option>$70</option>
                           <option>$75</option>
                            <option>$80</option>
                           <option>$85</option>
                           <option>$90</option>
                           <option>$95</option>
                           <option>$100</option>
                              <option>$105</option>
                           <option>$110</option>
                           <option>$115</option>
                           <option>$120</option>
                           <option>$125</option>

                            <option>$130</option>
                           <option>$135</option>
                           <option>$140</option>
                           <option>$145</option>
                           <option>$150</option>
                              
                        </select>
                     </div>
                  </div>
                  <div class="form_group_custom">
                     <div class="form-group">
                        <label for="exampleFormControlSelect2">ideal company size</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                           <option>Micro (1-10)</option>
                           <option>Small (10-50)</option>
                           <option>Medium (50-250)</option>
                           <option>Large (250-1000)</option>
                           <option>Huge (1000+)</option>
                           <option>Large (250-1000)</option>
                           <option>Huge (1000+)</option>
                        </select>
                     </div>
                  </div>
                
                     <input type="submit" name="" value="search">
            
               </form>
               <p>Top keyword:<span>UI/UX, Branding, Grapich designer</span></p>
            </div>
         </div>
      </section>
      <section class="help">
         <div class="container">
         <h1 class="sec_title">How WE can help</h1>
         <p class="section_title">We are the largest independent job board, register your CV to applying today. With simple search tool and instant job matches delivered to your inbox, it’s never been easear to land a new job with us.</p>
         <div class="inside_help">
            <div class="row justify-content-center align-items-start">
               <div class="col-lg-4">
                  <div class="help_card">
                     <div class="counter"><div>01</div></div>
                     <h4>Register</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="help_card">
                     <div class="counter"><div>01</div></div>
                     <h4>Search</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="help_card">
                     <div class="counter"><div>01</div></div>
                     <h4>Apply Job</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="upload_cv">
         <div class="container">
            <div class="cv_inner">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <img src="{{ asset('frontend/dist/images/cv_sec_img.png') }}" alt="" class="img-fluid">
               </div>
               <div class="col-lg-6">
                  <div class="cv_right">
                  <h1 class="sec_title">Upload your CV</h1>
                  <p class="section_title">We are the largest independent job board, register your CV to applying today.  it’s never been easear to land a new job with us.</p>
                  <a href="">Register now</a>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <section class="testimonial">
         <div class="container">
            <h1 class="sec_title">What People Say</h1>

   <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="testimonial_iner">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="test_left">
                        <img src="{{ asset('frontend/dist/images/profile.png') }}" class="img-fluid" alt="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="test-right">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                        <ul>
                           <li>
                              <h4>Kristina Kim</h4>
                              <h5>Product Designer</h5>
                           </li>
                           <li><img src="{{ asset('frontend/dist/images/google.png') }}" alt="" class="img-fluid"></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
</div>
    </div>

       <div class="item">
        <div class="testimonial_iner">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="test_left">
                        <img src="{{ asset('frontend/dist/images/profile.png') }}" class="img-fluid" alt="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="test-right">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                        <ul>
                           <li>
                              <h4>Kristina Kim</h4>
                              <h5>Product Designer</h5>
                           </li>
                           <li><img src="{{ asset('frontend/dist/images/google.png') }}" alt="" class="img-fluid"></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
       
    </div>

     

</div>
           
         </div>
      </section>
      <section class="feature">
         <div class="container">
              <h1 class="sec_title">Featured recruiter</h1>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-4 col-6">
                           
                                    <img src="{{ asset('frontend/dist/images/drop.png') }}" class="img-fluid" alt="">
                                 
                        </div>

                   <div class="col-lg-3 col-md-4 col-6">
                           
                                 <img src="{{ asset('frontend/dist/images/f_google.png') }}" class="img-fluid" alt="">
                        
                     </div>

                     <div class="col-lg-3 col-md-4 col-6">
                          
                                 <img src="{{ asset('frontend/dist/images/slack.png') }}" class="img-fluid" alt="">
                           
                     </div>
      

                   <div class="col-lg-3 col-md-4 col-6">
                          
                              <img src="{{ asset('frontend/dist/images/amozon.png') }}" class="img-fluid" alt="">
                        
                     </div>
                     
         </div>
          
        
      </section>
        


@endsection