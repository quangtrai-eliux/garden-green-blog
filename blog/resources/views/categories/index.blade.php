@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Categories
                <a href="{{route('categories.create')}}" title="Thêm mới" data-toggle="tooltip" class="ml-1">
                    <i class="far fa-plus-square"></i>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->category_name}}</td>
                            <td class="row justify-content-center m-0">
                                <a href="{{ route('categories.show', $category->id)}}" class="col-12 col-md-3 mr-1 btn btn-sm btn-success mb-1"><i
                                        class="far fa-eye"></i> </a>
                                <a href="{{ route('categories.edit', $category->id)}}"
                                 class="col-12 col-md-3 mr-1 btn btn-sm btn-info mb-1"><i class="far fa-edit"></i> </a>
                                 <form action="{{ route('categories.destroy',$category->id)}}" method="POST" class="col-12 col-md-3 p-0">
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