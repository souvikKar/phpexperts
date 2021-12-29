@extends('admin.admin_master')
@section('admin')

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <div class="py-12">

         <div class="container">
         <div class="row">



        <div class="col-md-12">
            <div class="card">
                <div class= "card-header">Edit About Page</div>
                <div class="card-body">
                 <form action="{{ url('about/update/'.$abouts->id) }}" method="POST">
                     @csrf
                     
                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Update about Details</label>
                      <input type="text"  name="about_me" class="form-control" value="{{ $abouts->about_me }}">

                      @error('about_me')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>

                   

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Update Email</label>
                      <input type="text"  name="email" class="form-control" value="{{ $abouts->email }}">

                      @error('email')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>
                   
                  

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Update Phone Number</label>
                      <input type="text" name="phone" class="form-control" value="{{ $abouts->phone }}">

                      @error('phone')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Update age</label>
                      <input type="text"  name="age" id="startDate" class="date-picker form-control" value="{{ $abouts->age }}">

                      @error('age')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>

                    <!-- <div class="mb-3">
                    <label for="startDate">Date :</label>
                    <input name="startDate" id="startDate" class="date-picker" />
                    </div> -->

                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Update Address</label>
                        <input type="text" rows="3" name="address" class="form-control" value="{{ $abouts->address }}">

                        @error('address')
                        <span class="text-danger">{{ $message }}</span>  //validation
                        @enderror


                       </div>

                    
                       <br>
                      <button type="submit" class="btn btn-primary">Update about</button>
                  </form>
                </div>
            </div>
        </div>
         </div>

    </div>

@endsection
