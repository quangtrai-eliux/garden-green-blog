@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Show to Tag ID: {{$tag->id}}
                <a href="{{ route('tags.edit', $tag->id)}}" title="Edit" data-toggle="tooltip" class="ml-1">
                    <i class="far fa-edit"></i>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <form>
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="form-group">
                    <label for="id">Tag ID</label>
                    <input type="text" class="form-control" value="{{$tag->id}}" name="id" disabled>
                </div>

                <div class="form-group">
                    <label for="">Tag Name</label>
                    <input type="text" class="form-control" value="{{$tag->tag_name}}" name=""
                        disabled>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection