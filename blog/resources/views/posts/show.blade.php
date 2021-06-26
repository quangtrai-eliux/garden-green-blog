@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Show to Post ID: {{$post->id}}
                <a href="{{ route('posts.edit', $post->id)}}" title="Edit" data-toggle="tooltip" class="ml-1">
                    <i class="far fa-edit"></i>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <form >
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="form-group">
                    <label for="id">Post ID:</label>
                    <input type="text" class="form-control" value="{{$post->id}}" name="id" disabled>
                </div>

                <div class="form-group">
                    <label for="category_name">Title:</label>
                    <textarea type="text" class="form-control" value="{{$post->title}}" name="category_name"
                        disabled>{{$post->title}}</textarea>
                </div>
                <div class="form-group">
                    <label for="category_name">Description:</label>
                    <textarea type="text" class="form-control" value="{{$post->description}}" name="category_name"
                        disabled>{{$post->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="category_name">Content:</label>
                    <textarea type="text" class="form-control" value="{{$post->content}}" name="category_name"
                        disabled>{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <label for="id">Name:</label>
                    <input type="text" class="form-control" value="{{$post->user->name}}" name="id" disabled>
                </div>
                <div class="form-group">
                    <label for="id">Post Type:</label>
                    <input type="text" class="form-control" value="{{$post->postType->post_type_name}}" name="id" disabled>
                </div>
                <div class="form-group">
                    <label for="id">View:</label>
                    <input type="text" class="form-control" value="{{$post->view}}" name="id" disabled>
                </div>
                <div class="form-group">
                    <label for="id">View:</label>
                    <input type="text" class="form-control" value="@if ( $post->status === 1 ) Hiện  @else Ẩn @endif" name="id" disabled>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection