@extends('frontendtemplate')

@section('content')
  <div class="container">

    <div class="row my-5">
      <div class="col-md-12">
        <h2>Shopping Cart!</h2>
        {{-- id, name, photo, price, qty --}}

        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Item</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        {{-- Using Form --}}
        <form method="post" action="{{route('order.store')}}">
          @csrf
          <div class="form-group">
            <textarea class="form-control d-inline-block w-100" placeholder="Notes.." name="notes" required></textarea>
            <input type="hidden" name="order" value="" id="ls">
          </div>
          
          <div class="my-4">
            <a href="#" class="btn btn-info">Continue Shopping</a>
            <div class="d-inline-block ml-auto">
              <button class="btn btn-success" type="submit">Checkout</button>
            </div>
          </div>
        </form>

        {{-- // Using Ajax --}}
        {{-- <form method="" action="" class="checkoutform">
          @csrf
          <textarea class="form-control notes" placeholder="Notes.." required></textarea>
          <div class="mt-4">
            <a href="#" class="btn btn-info">Continue Shopping</a>
            <div class="d-inline-block ml-auto">
              @role('customer')
                <button class="btn btn-success" type="submit">Checkout</button>
              @else
                <a class="btn btn-success" href="{{route('signinpage')}}">Sign in to Checkout</a>
              @endrole
            </div>
          </div>
        </form> --}}
      </div>
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
        // Usin Ajax
        // $('.checkoutform').submit(function(e){
        //   let notes = $('.notes').val();
        //   if (notes === "") {
        //     return true;
        //   }else{
        //     let order = localStorage.getItem('cart'); // JSON String
        //     $.post("{{route('order.store')}}",{order:order,notes:notes},function (response) {
        //       alert(response.msg);
        //       localStorage.clear();
        //       location.href="/";
        //     })
        //     e.preventDefault();
        //   }
        // })

        // Using Form
        $('#ls').val(localStorage.getItem('cart'));
      })
    </script>
@endsection