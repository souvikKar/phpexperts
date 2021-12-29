@extends('layouts.master_home')

@section('home_content')


<div class="page-content">
      <div class="container">
                            <div class="cover shadow-lg bg-white">
                            <div class="cover-bg p-3 p-lg-4 text-white">
                                <div class="row">
                                <div class="col-lg-4 col-md-5">
                                    <div class="avatar hover-effect bg-white shadow-sm p-1"><img src=
                                    {{ $hometitles->image }} width="200" height="200"/></div>
                        </div>
                        <div class="col-lg-8 col-md-7 text-center text-md-start">
                            <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0">{{ $hometitles->name }}</h2>
                            <p data-aos="fade-left" data-aos-delay="100">{{ $hometitles->designation}}</p>
                            <div class="d-print-none" data-aos="fade-left" data-aos-delay="200"><a class="btn btn-light text-dark shadow-sm mt-1 me-1" href="right-resume.pdf" target="_blank">Download CV</a><a class="btn btn-success shadow-sm mt-1" href="#contact">Hire Me</a></div>
                        </div>
                        </div>
                    </div>
                    @foreach($homeabouts as $abouts)
                    <div class="about-section pt-4 px-3 px-lg-4 mt-1">
                        <div class="row">
                        <div class="col-md-6">
                            <h2 class="h3 mb-3">About Me</h2>
                            <p>{{ $abouts->about_me}}</p>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div class="row mt-2">
                            <div class="col-sm-4">
                                <div class="pb-1">Age</div>
                            </div>
                            <div class="col-sm-8">
                                <div class="pb-1 text-secondary">{{ $abouts->age}}</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="pb-1">Email</div>
                            </div>
                            <div class="col-sm-8">
                                <div class="pb-1 text-secondary">{{ $abouts->email}}</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="pb-1">Phone</div>
                            </div>
                            <div class="col-sm-8">
                                <div class="pb-1 text-secondary">{{ $abouts->phone}}</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="pb-1">Address</div>
                            </div>
                            <div class="col-sm-8">
                                <div class="pb-1 text-secondary">{{ $abouts->address}}</div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    <hr class="d-print-none"/>
                    <div class="skills-section px-3 px-lg-4">
                        <h2 class="h3 mb-3">Professional Skills</h2>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2"><span>HTML</span>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                            <div class="mb-2"><span>CSS</span>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                            <div class="mb-2"><span>JavaScript</span>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2"><span>Adobe Photoshop</span>
                            <div class="progress my-1">
                                <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                            <div class="mb-2"><span>Sketch</span>
                            <div class="progress my-1">
                                <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                            <div class="mb-2"><span>Adobe XD</span>
                            <div class="progress my-1">
                                <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <hr class="d-print-none"/>
                    <div class="work-experience-section px-3 px-lg-4">
                        <h2 class="h3 mb-4">Work Experience</h2>
                        <div class="timeline">
                        @foreach ($homeworks as $work )
                            
                        
                        <div class="timeline-card timeline-card-primary card shadow-sm">
                            <div class="card-body">
                            <div class="h5 mb-1">{{ $work->designation }} <span class="text-muted h6">at {{ $work->company }}</span></div>
                            <div class="text-muted text-small mb-2">{{ $work->start_date }} - {{ $work->end_date }}</div>
                            <div>{{ $work->description }}</div>
                            </div>
                        </div>
                        @endforeach
                       
                        </div>
                    </div>
                    <hr class="d-print-none"/>
                    <div class="page-break"></div>
                    <div class="education-section px-3 px-lg-4 pb-4">
                        <h2 class="h3 mb-4">Education</h2>
                        <div class="timeline">
                        @foreach ($homeeducates as $edu)
                            
                         <div class="timeline-card timeline-card-success card shadow-sm">
                            <div class="card-body">
                            <div class="h5 mb-1">{{ $edu->degree }} <span class="text-muted h6">at {{ $edu->university}}</span></div>
                            <div class="text-muted text-small mb-2">{{ $edu->start_date }} - {{ $edu->end_date }}</div>
                            <div>{{ $edu->description }}</div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                    <hr class="d-print-none"/>
                    <div class="contant-section px-3 px-lg-4 pb-4" id="contact">
                        <h2 class="h3 text mb-3">Contact</h2>
                        <div class="row">
                       @if(session('success')) <div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>{{ session('success') }}</strong> 
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                        </div>
                        @endif
                        <div class="col-md-7 d-print-none">
                            <div class="my-2">
                                <form action="{{ route('contact.form') }}" method="POST">
                                 @csrf
                                    <div class="row">
                                        <div class="col-6">
                                        <input class="form-control" type="text" id="name" name="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="col-6">
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <div class="form-group my-2">
                                        <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4"  placeholder="Your Message" required></textarea>
                                    </div>
                                    <button  type="submit" class="btn btn-primary mt-2">Send</button>
                                </form>
                        </div>
                        </div>
                        <div class="col">
                            <div class="mt-2">
                            <h3 class="h6">Address</h3>
                            <div class="pb-2 text-secondary">{{ $abouts->address}}</div>
                            <h3 class="h6">Phone</h3>
                            <div class="pb-2 text-secondary">{{ $abouts->phone}}</div>
                            <h3 class="h6">Email</h3>
                            <div class="pb-2 text-secondary">{{ $abouts->email}}</div>
                            </div>
                        </div>
                        <div class="col d-none d-print-block">
                            <div class="mt-2">
                            <div>
                                <div class="mb-2">
                                <div class="text-dark"><i class="fab fa-twitter mr-1"></i><span>https://twitter.com/templateflip</span>
                                </div>
                                </div>
                                <div class="mb-2">
                                <div class="text-dark"><i class="fab fa-facebook mr-1"></i><span>https://www.facebook.com/templateflip</span>
                                </div>
                                </div>
                                <div class="mb-2">
                                <div class="text-dark"><i class="fab fa-instagram mr-1"></i><span>https://www.instagram.com/templateflip</span>
                                </div>
                                </div>
                                <div class="mb-2">
                                <div class="text-dark"><i class="fab fa-github mr-1"></i><span>https://github.com/templateflip</span>
                                </div>
                                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    @endsection