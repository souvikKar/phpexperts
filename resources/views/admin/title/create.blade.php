@extends('admin.admin_master')
@section('admin')

<div class="card">
<div class="card-body wizard-content">
        <div class="card-header card-header-border-bottom">
            <h2>Create Title</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.title') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title Name </label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">

                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Title Designation</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="designation"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Title Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" style="height: 300; width :300">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
