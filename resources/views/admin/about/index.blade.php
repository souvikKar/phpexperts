@extends('admin.admin_master')
@section('admin')



  <div class="page-breadcrumb">
        <div class="row">
        <div class="col-12  no-block align-items-center">
        <h4>Home About</h4>
            <a href="{{ route('add.about') }}"> <button class="btn btn-info">Add About</button>
                <br><br>
            </a>
        </div>
        </div>
        </div>
         <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="card">

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @endif
                     <div class= "card-header">All Abouts</div>


                 <table class="table">
                 <thead>
                  <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">About Me Details</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Address</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                     @php($i = 1) 
                    @foreach($abouts as $about)
                    <tr>
                   
                    <th scope="row">{{$i++ }}</th>{{-- for pagination counting --}}
                    <td>{{ $about->about_me }}</td>
                    <td>{{ $about->age }}</td>
                    <td>{{ $about->email }}</td>
                    <td>{{ $about->phone }}</td>
                    <td>{{ $about->address }}</td>
                    <td>
                        @if($about->created_at == NULL)
                        <span class="text-danger">No Date Set</span>
                        @else
                        {{ Carbon\Carbon::parse($about->created_at)->diffForHumans() }}
                    </td>
                        @endif
                        <td>
                            <a href="{{ url('about/edit/'.$about->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('about/delete/'.$about->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                        </td>

                  </tr>
                  @endforeach

                </tbody>
              </table>
             
            </div>
        </div>

       
         </div>
 </div>

@endsection
