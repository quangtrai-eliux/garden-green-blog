@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Post Types</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>PostTypeID</th>
                            <th>PostTypeName</th>
                            <th>CategoryName</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posttypes as $posttype)
                        <tr>
                            <td>{{$posttype->id}}</td>
                            <td>{{$posttype->post_type_name}}</td>
                            <td>
                                <span class="relationships p-2" data-toggle="tooltip" data-placement="right" title="CategoryID: {{$posttype->category_id}}">
                                    {{$posttype->category->category_name}}
                                </span>
                            </td>
                            <td class="row justify-content-center m-0">
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