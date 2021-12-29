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
                <div class= "card-header">Edit Title</div>
                <div class="card-body">
                 <form action="{{ url('title/update/'.$titles->id) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="old_image" value="{{ $titles->image }}">
                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Update Title Name</label>
                      <input type="text"  name="name" class="form-control" value="{{ $titles->name }}">

                      @error('name')
                      <span class="text-danger">{{ $message }}</span>  //validation
                      @enderror


                     </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Update Title Designation</label>
                        <input type="text" rows="3" name="designation" class="form-control" value="{{ $titles->designation }}">

                        @error('designation')
                        <span class="text-danger">{{ $message }}</span>  //validation
                        @enderror


                       </div>

                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title Image</label>
                        <input type="file"  name="image" class="form-control" value="{{ $titles->image }}">

                        @error('image')
                        <span class="text-danger">{{ $message }}</span>  //validation
                        @enderror


                       </div>

                       <div class="form-group">
                           <img src="{{ asset($titles->image) }}" style="width:400px; height:200px;">
                       </div>
                       <br>
                      <button type="submit" class="btn btn-primary">Update Title</button>
                  </form>
                </div>
            </div>
        </div>
         </div>

    </div>

@endsection
