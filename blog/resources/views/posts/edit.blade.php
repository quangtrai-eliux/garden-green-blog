@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit to Post ID: {{$post->id}}
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="form-group">
                    <label for="category_name">Title:</label>
                    <textarea type="text" class="form-control" value="{{$post->title}}" name="title"
                        >{{$post->title}}</textarea>
                </div>
                <div class="form-group">
                    <label for="category_name">Description:</label>
                    <textarea type="text" class="form-control" value="{{$post->description}}" name="description"
                        >{{$post->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="category_name">Content:</label>
                    <textarea type="text" class="form-control" value="{{$post->content}}" name="content"
                        >{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <label for="id">Name:</label>
                    <input type="text" class="form-control" value="{{$post->user->name}}" name="user_id" >
                </div>
                <div class="form-group">
                    <label for="id">Post Type:</label>
                    <input type="text" class="form-control" value="{{$post->postType->post_type_name}}" name="post_id" >
                </div>
                <div class="form-group">
                    <label for="id">View:</label>
                    <input type="text" class="form-control" value="{{$post->view}}" name="view" >
                </div>
                <div class="form-group">
                    <label for="id">Status:</label>
                    <input type="text" class="form-control" value="@if ( $post->status === 1 ) Hiện  @else Ẩn @endif" name="status">
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