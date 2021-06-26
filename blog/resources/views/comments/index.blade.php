@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Comments</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>CmtID</th>
                            <th>Content</th>
                            <th>PID</th>
                            <th>UID</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{$comment->id}}</td>
                            <td>{{substr($comment->content,0,140)}}</td>
                            <td>{{$comment->post_id}}</td>
                            <td>{{$comment->user_id}}</td>
                            <td>{{$comment->status}}</td>
                            <td class="row justify-content-center m-0 p-2">
                            <a href="{{ route('comments.show', $comment->id)}}" class="col-12 btn btn-sm btn-success mb-1"><i
                                        class="far fa-eye"></i> </a>
                            <form action="{{ route('comments.destroy',$comment->id)}}" method="POST" class="col-12 p-0">
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