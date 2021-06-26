@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create to Post:
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="category_name">Title:</label>
                    <textarea type="text" class="form-control" value="" name="title"
                        ></textarea>
                </div>
                <div class="form-group">
                    <label for="category_name">Description:</label>
                    <textarea type="text" class="form-control" value="" name="description"
                        ></textarea>
                </div>
                <div class="form-group">
                    <label for="category_name">Content:</label>
                    <textarea type="text" class="form-control" value="" name="content"
                        ></textarea>
                </div>
                <div class="form-group">
                    <label for="id">User ID:</label>
                    <input type="text" class="form-control" value="" name="user_id" >
                </div>
                <div class="form-group">
                    <label for="id">Post Type:</label>
                    <select name="post_type_id" id="" class="form-control" >
                        @foreach($posttypes as $posttype)
                        <option value="{{$posttype->id}}" >{{$posttype->post_type_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id">View:</label>
                    <input type="text" class="form-control" value="" name="view" >
                </div>
                <div class="form-group">
                    <label for="id">Status:</label>
                    <select name="status" id="" class="form-control" >
                        <option value="0" >Hide</option>
                        <option value="1" >Show</option>
                    </select>
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