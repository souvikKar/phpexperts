@extends('admin.admin_master')
@section('admin')

       <div class="page-breadcrumb">
        <div class="row">
        <div class="col-12  no-block align-items-center">
        <h4>Home Work</h4>
            <a href="{{ route('add.work') }}"> <button class="btn btn-info">Add Work</button>
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
                     <div class= "card-header">All Work Experience Details</div>


                 <table class="table">
                 <thead>
                  <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Company</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                     @php($i = 1) 
                    @foreach($works as $work)
                    <tr>
                   
                    <th scope="row">{{$i++ }}</th>{{-- for pagination counting --}}
                    <td>{{ $work->designation }}</td>
                    <td>{{ $work->company }}</td>
                    <td>{{ $work->start_date}}</td>
                    <td>{{ $work->end_date}}</td>
                    <td>{{ $work->description}}</td>
    
                    <td>
                        @if($work->created_at == NULL)
                        <span class="text-danger">No Date Set</span>
                        @else
                        {{ Carbon\Carbon::parse($work->created_at)->diffForHumans() }}
                    </td>
                        @endif
                        <td>
                            <a href="{{ url('work/edit/'.$work->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('work/delete/'.$work->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                        </td>

                  </tr>
                  @endforeach

                </tbody>
              </table>
              {{ $works->links() }}
            </div>
        </div>

       
         </div>
 </div>



 

@endsection
