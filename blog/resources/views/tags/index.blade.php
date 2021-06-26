@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tags
                <a href="{{route('tags.create')}}" title="Thêm mới" data-toggle="tooltip" class="ml-1">
                    <i class="far fa-plus-square"></i>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>TagID</th>
                            <th>TagName</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->tag_name}}</td>
                            <td class="row justify-content-center m-0">
                                <a href="{{ route('tags.show', $tag->id)}}"
                                    class="col-12 col-md-3 mr-1 btn btn-sm btn-success mb-1"><i class="far fa-eye"></i> </a>
                                <a href="{{ route('tags.edit', $tag->id)}}" class="col-12 col-md-3 mr-1 btn btn-sm btn-info mb-1"><i
                                        class="far fa-edit"></i> </a>
                                <form action="{{ route('tags.destroy',$tag->id)}}" method="POST" class="col-12 col-md-3 mr-1 p-0">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="submit" class="col-12 btn btn-sm btn-danger mb-1"><i
                                            class="far fa-trash-alt"></i></button>
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