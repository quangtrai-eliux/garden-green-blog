@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Show to Advertisement ID: {{$adv->id}}
                <a href="{{ route('advs.edit', $adv->id)}}" title="Edit" data-toggle="tooltip" class="ml-1">
                    <i class="far fa-edit"></i>
                </a>
            </h6>
        </div>
        <div class="card-body">
        <form>
          {{ csrf_field() }}
              {{ method_field('put') }}
            <div class="form-group">
            <label for="number_block">Number_block:</label>
                <input type="text" class="form-control" value="{{$adv->number_block}}" name="number_block" disabled>
            </div>

            <div class="form-group">
                <label for="uri">URI:</label>
                    <input type="text" class="form-control" value="{{$adv->uri}}" name="uri" disabled>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                    <input type="text" class="form-control" value="{{$adv->description}}" name="description" disabled>
            </div>
        </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection