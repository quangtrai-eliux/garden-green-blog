@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Posts
            <a href="{{route('posts.create')}}" title="Thêm mới" data-toggle="tooltip" class="ml-1">
                    <i class="far fa-plus-square"></i>
                </a>
                </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Post</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Content</th>
                            <th>Name</th>
                            <th>PType</th>
                            <th>View</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{substr($post->title,0,70)}}</td>
                            <td>{{substr($post->description,0,70)}}</td>
                            <td>{{substr($post->content,0,70)}}</td>
                            <td>
                                <span class="relationships p-2" data-toggle="tooltip" data-placement="right" title="UID: {{$post->user_id}}">
                                    {{$post->user->name}}
                                </span>
                            </td>
                            <td>
                                <span class="relationships p-2" data-toggle="tooltip" data-placement="right" title="PostTypeID: {{$post->post_type_id}}">
                                    {{$post->postType->post_type_name}}
                                </span>
                            </td>
                            <td>{{$post->view}}</td>
                            <td>@if ( $post->status === 1 ) Hiện  @else Ẩn @endif</td>
                            <td class="row justify-content-center m-0">
                                <a href="{{ route('posts.show', $post->id)}}" class="col-12 btn btn-sm btn-success mb-1"><i
                                        class="far fa-eye"></i> </a>
                                <a href="{{ route('posts.edit', $post->id)}}"
                                 class="col-12 btn btn-sm btn-info mb-1"><i class="far fa-edit"></i> </a>
                                 <form action="{{ route('posts.destroy',$post->id)}}" method="POST" class="col-12 p-0">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="submit" class="col-12 btn btn-sm btn-danger mb-1"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection