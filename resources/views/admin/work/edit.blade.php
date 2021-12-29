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
                <div class= "card-header">Edit Work Page</div>
                <div class="card-body">
                 <form action="{{ url('work/update/'.$works->id) }}" method="POST">
                     @csrf
                     
                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Update Designation Details</label>
                      <input type="text"  name="designation" class="form-control" value="{{ $works->designation }}">

                      @error('designation')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>

                   

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Update Company</label>
                      <input type="text"  name="company" class="form-control" value="{{ $works->company }}">

                      @error('company')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="DisplayOnClick">
                         <label for="checkbox"> i'm presently working in this company</label><br>
                
                   </div>
                  
                    <div class="row">
                    <div class="col-md-6">
                      <label for="exampleInputEmail1" class="form-label">Update Start date</label>
                      <input type="text" name="start_date" id="startDate" class="date-picker form-control" value="{{ $works->start_date }}">

                      @error('start_date')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>

                    <div class="col-md-6">
                      <label for="exampleInputEmail1" class="form-label">Update End Date</label>
                      <input type="text"  name="end_date" id="myFieldset" class="date-picker form-control" value="{{ $works->end_date }}">

                      @error('end_date')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror
                    </div>
                    </div>


                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Update Description</label>
                        <input type="text" class="form-control" rows="10" name="description"  value="{{ $works->description }}">

                        @error('description')
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
