@extends('admin.admin_master')
@section('admin')





        <div class="page-breadcrumb">
        <div class="row">
        <div class="col-12  no-block align-items-center">
        <h4>Home Title</h4>
            <a href="{{ route('add.title') }}"> <button class="btn btn-info">Add Title</button>
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
                     <div class= "card-header">All Titles</div>


                 <table class="table">
                 <thead>
                  <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Title Name</th>
                    <th scope="col">Title Designation</th>
                    <th scope="col">Title Image</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                     @php($i = 1) 
                    @foreach($titles as $title)
                    <tr>
                   
                    <th scope="row">{{$i++ }}</th>{{-- for pagination counting --}}
                    <td>{{ $title->name }}</td>
                    <td>{{ $title->designation }}</td>
                    <td><img src="{{ asset($title->image) }}" style="height:40px; width:70px" alt=""></td>
                    <td>
                        @if($title->created_at == NULL)
                        <span class="text-danger">No Date Set</span>
                        @else
                        {{ Carbon\Carbon::parse($title->created_at)->diffForHumans() }}
                    </td>
                        @endif
                        <td>
                            <a href="{{ url('title/edit/'.$title->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('title/delete/'.$title->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                        </td>

                  </tr>
                  @endforeach

                </tbody>
              </table>
              {{  $titles->links()}}
            </div>
        </div>

       
         </div>
 </div>

@endsection
