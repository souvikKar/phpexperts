
@extends('admin.admin_master')
@section('admin')
    

<div class="card">
<div class="card-body wizard-content">
        <div class="card-header card-header-border-bottom">
            <h2>Create Work</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.work') }}" method="POST" >
                @csrf
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">Designation</label>
                    <input type="text" class="form-control" placeholder="Enter Designation" name="designation" >

                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Company</label>
                    <input type="text" class="form-control" placeholder="Enter Company Name" name="company" >

                </div>
                 <div class="form-group">
                    <input type="checkbox" id="DisplayOnClick">
                         <label for="checkbox"> i'm presently working in this company</label><br>
                
                </div>
                
                <div class="row">             
                <div class="col-md-6">
                    <label for="exampleFormControlTextarea1">Start Date</label>
                    <input type="text" name="start_date" id= "startDate" class="date-picker form-control" id="exampleFormControlInput1" placeholder="Start date">
                </div>
               
                    
                
                <div class="col-md-6">
                    <label for="exampleFormControlTextarea1">End Date</label>
                    <input type="text" name="end_date"  id="myFieldset" class="date-picker form-control" id="exampleFormControlInput1" placeholder="End date">
                </div>
                
                </div>
                

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                          
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
