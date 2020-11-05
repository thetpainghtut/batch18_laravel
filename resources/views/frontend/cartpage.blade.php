@extends('frontendtemplate')

@section('content')
  <div class="container">

    <div class="row my-5">
      <h2>Shopping Cart!</h2>
      {{-- id, name, photo, price, qty --}}
      <table class=""></table>

      <textarea class="form-control notes"></textarea>
      @role('customer')
        <button class="btn btn-success checkout">Checkout</button>
      @else
        <button class="btn btn-success">Sign in Checkout</button>
      @endrole
    </div>
    <!-- /.row -->

  </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('my_asset/js/custom.js')}}"></script>

    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      
      $(document).ready(function () {
        $('.checkout').click(function () {
          let notes = $('.notes').val();
          let order = localStorage.getItem('cart'); // JSON String
          $.post("{{route('order.store')}}",{order:order,notes:notes},function (response) {
            console.log(response.msg);
          })
        })
      })
    </script>
@endsection