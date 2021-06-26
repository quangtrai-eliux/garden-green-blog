@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 inline-block">
            <h6 class="m-0 font-weight-bold text-primary">Advertisements
                <a href="{{route('advs.create')}}" title="Thêm mới" data-toggle="tooltip" class="ml-1">
                    <i class="far fa-plus-square"></i>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>AdvID</th>
                            <th>NbBlock</th>
                            <th>URI</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($advs as $adv)
                        <tr>
                            <td>{{$adv->id}}</td>
                            <td>{{$adv->number_block}}</td>
                            <td>{{substr($adv->uri,0,80)}}...</td>
                            <td>{{substr($adv->description,0,80)}}...</td>
                            <td class="row justify-content-center m-0">
                                <a href="{{ route('advs.show', $adv->id)}}" class="col-12 btn btn-sm btn-success mb-1"><i
                                        class="far fa-eye"></i> </a>
                                <a href="{{ route('advs.edit', $adv->id)}}" class="col-12 btn btn-sm btn-info mb-1"><i
                                        class="far fa-edit"></i> </a>
                                <form action="{{ route('advs.destroy',$adv->id)}}" method="POST" class="col-12 p-0">
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