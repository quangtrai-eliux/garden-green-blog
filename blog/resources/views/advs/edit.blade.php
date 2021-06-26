@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update to Advertisement</h6>
        </div>
        <div class="card-body">
        <form action="{{ route('advs.update', $adv->id) }}" method="post">
          {{ csrf_field() }}
              {{ method_field('put') }}
            <div class="form-group">
            <label for="number_block">Number_block:</label>
                <input type="text" class="form-control" value="{{$adv->number_block}}" name="number_block" >
            </div>

            <div class="form-group">
                <label for="uri">URI:</label>
                    <input type="text" class="form-control" value="{{$adv->uri}}" name="uri" >
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                    <input type="text" class="form-control" value="{{$adv->description}}" name="description" >
            </div>
            <button type="submit" class="btn btn-primary btn-default">Done</button>
        </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection