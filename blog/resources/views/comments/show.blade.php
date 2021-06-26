@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Show to Comment ID: {{$comment->id}}
                <a href="{{ route('comments.edit', $comment->id)}}" title="Edit" data-toggle="tooltip" class="ml-1">
                    <i class="far fa-edit"></i>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <form>
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="form-group">
                    <label for="id">Comment ID:</label>
                    <input type="text" class="form-control" value="{{$comment->id}}" name="id" disabled>
                </div>

                <div class="form-group">
                    <label for="category_name">Content:</label>
                    <textarea type="text" class="form-control" value="{{$comment->content}}" name="category_name"
                        disabled>{{$comment->content}}</textarea>
                </div>
                <div class="form-group">
                    <label for="id">Post ID:</label>
                    <input type="text" class="form-control" value="{{$comment->post_id}}" name="id" disabled>
                </div>
                <div class="form-group">
                    <label for="id">User ID:</label>
                    <input type="text" class="form-control" value="{{$comment->user_id}}" name="id" disabled>
                </div>
                <div class="form-group">
                    <label for="id">Status:</label>
                    <input type="text" class="form-control" value="{{$comment->status}}" name="id" disabled>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection