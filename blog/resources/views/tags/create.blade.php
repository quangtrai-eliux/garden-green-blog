@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add to Tags</h6>
        </div>
        <div class="card-body">
        <form action="{{ route('tags.store') }}" method="post">
          {{ csrf_field() }}
            <div class="form-group">
            <label for="tag_name">Tag Name:</label>
                <input type="text" class="form-control" value="" name="tag_name" >
            </div>
            <button type="submit" class="btn btn-primary btn-default">Done</button>
        </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection