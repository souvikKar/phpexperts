@extends('admin.admin_master')
@section('admin')

<div class="card">
<div class="card-body wizard-content">
        <div class="card-header card-header-border-bottom">
            <h2>Create About</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.about') }}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">About Me Details </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about_me"></textarea>

                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Age</label>
                    <input type="text" id="startDate" class="date-picker form-control" placeholder="Enter age" name="age" >

                </div>

                             
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                </div>
                          
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
