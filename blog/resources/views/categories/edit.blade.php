@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update to Advertisement</h6>
        </div>
        <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="post">
          {{ csrf_field() }}
              {{ method_field('put') }}
            <div class="form-group">
            <label for="category_name">Category Name:</label>
                <input type="text" class="form-control" value="{{$category->category_name}}" name="category_name" >
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