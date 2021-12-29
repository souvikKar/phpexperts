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
                <div class= "card-header">Edit Education Page</div>
                <div class="card-body">
                 <form action="{{ url('education/update/'.$educations->id) }}" method="POST">
                     @csrf
                     
                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Update Degree Details</label>
                      <input type="text"  name="degree" class="form-control" value="{{ $educations->degree }}">

                      @error('degree')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>

                   

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Update University</label>
                      <input type="text"  name="university" class="form-control" value="{{ $educations->university }}">

                      @error('university')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="DisplayOnClick">
                         <label for="checkbox"> i'm parsuing on studying </label><br>
                
                   </div>
                  
                    <div class="row">
                    <div class="col-md-6">
                      <label for="exampleInputEmail1" class="form-label">Update Start date</label>
                      <input type="text" name="start_date" id="startDate" class="date-picker form-control" value="{{ $educations->start_date }}">

                      @error('start_date')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>

                    <div class="col-md-6">
                      <label for="exampleInputEmail1" class="form-label">Update End Date</label>
                      <input type="text"  name="end_date" id="myFieldset" class="date-picker form-control" value="{{ $educations->end_date }}">

                      @error('end_date')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>
                    </div>


                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Update Description</label>
                        <input type="text" class="form-control" rows="10" name="description"  value="{{ $educations->description }}">

                        @error('description')
                        <span class="text-danger">{{ $message }}</span>  //validation
                        @enderror
                     </div>

                    
                       <br>
                      <button type="submit" class="btn btn-primary">Update Education</button>
                  </form>
                </div>
            </div>
        </div>
         </div>

    </div>

@endsection
