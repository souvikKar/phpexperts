@extends('admin.admin_master')
@section('admin')

      <div class="page-breadcrumb">
        <div class="row">
        <div class="col-12  no-block align-items-center">
        <h4>Home Work</h4>
            <a href="{{ route('add.education') }}"> <button class="btn btn-info">Add Education Details</button>
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
                     <div class= "card-header">All Education Details</div>


                 <table class="table">
                 <thead>
                  <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Degree </th>
                    <th scope="col">university</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                     @php($i = 1) 
                    @foreach($educations as $education)
                    <tr>
                   
                    <th scope="row">{{$i++ }}</th>{{-- for pagination counting --}}
                    <td>{{ $education->degree  }}</td>
                    <td>{{ $education->university }}</td>
                    <td>{{ $education->start_date}}</td>
                    <td>{{ $education->end_date}}</td>
                    <td>{{ $education->description}}</td>
    
                    <td>
                        @if($education->created_at == NULL)
                        <span class="text-danger">No Date Set</span>
                        @else
                        {{ Carbon\Carbon::parse($education->created_at)->diffForHumans() }}
                    </td>
                        @endif
                        <td>
                            <a href="{{ url('education/edit/'.$education->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('education/delete/'.$education->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                        </td>

                  </tr>
                  @endforeach

                </tbody>
              </table>
              {{ $educations->links() }}
            </div>
        </div>

       
         </div>
 </div>



 

@endsection
