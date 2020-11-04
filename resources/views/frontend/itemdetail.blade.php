@extends('frontendtemplate')

@section('content')
  <div class="container">

    <div class="row my-5">

      <div class="col-md-6">
        <img src="{{asset($item->photo)}}" class="img-fluid">
      </div>

      <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>{{$item->name}}</h4>
            </div>
            <div class="card-body">
                <p>{{$item->description}}</p>

                <p>{{$item->price}} MMK</p>

                <input type="number" name="qty" class="form-control w-50" value="1" min="1">
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Add To Cart</button>
            </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('my_asset/js/custom.js')}}"></script>
@endsection