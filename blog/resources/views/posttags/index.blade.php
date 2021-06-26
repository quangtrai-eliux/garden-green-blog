@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Post Tags</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TagName</th>
                            <th>PostTitle</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posttags as $posttag)
                        <tr>
                            <td>{{$posttag->id}}</td>
                            <td>  
                                <span class="relationships p-2" data-toggle="tooltip" data-placement="right" title="TagID: {{$posttag->tag_id}}">
                                    {{$posttag->tag->tag_name}}
                                </span>
                            </td>
                            <td>
                                <span class="relationships p-2" data-toggle="tooltip" data-placement="right" title="PostID: {{$posttag->post_id}}">
                                    {{substr($posttag->post->title,0,50)}}...
                                </span>
                            </td>
                            <td class="row justify-content-center m-0 p-2">
                                <a href=""
                                 class="col-12 col-md-5 mr-1 btn btn-sm btn-info mb-1"><i class="far fa-edit"></i> </a>
                                <a href="" 
                                class="col-12 col-md-5 mr-1 btn btn-sm btn-danger mb-1"><i class="far fa-trash-alt"></i></a>
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