@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <div class="row"> --}}
       
        
          @foreach ($cart as $carts)
          
          {{-- @foreach ($pizzas as $pizzas) --}}
              {{-- <div class="spasibawah"> --}}
                  {{-- <div class="card" style="width: 15rem;"> --}}
                  
                  {{-- <div class="flex">
                    <img height="100px" width="100px" src="{{asset('storage/images/pizza/'.$carts->pizzas->pizza_image)}}" alt="Card image cap">
                  </div>
                 
                    <p class="card-text">{{$carts->pizzas->pizza_name}}</p>
                      <p class="card-text">Rp. {{$carts->pizzas->pizza_price}}</p>
                      <p class="card-text">Quantity: {{$carts->pizza_quantity}}</p>
                  </div> --}}
                      
                  <div class="flex">
                    <div class="spasi">
                        <img width="100px" height="100px"src="{{asset('storage/images/pizza/'.$carts->pizzas->pizza_image)}}" alt="Card image cap">
                            
                        </div>
                        <div class="tulisanDetail">
                        <p class="cartfont">{{$carts->pizzas->pizza_name}}</p>
                        <p class="cartfont">Rp. {{$carts->cart_price}}</p>
                        <p class="cartfont">Quantity: {{$carts->pizza_quantity}}</p>


                        <form method="POST" action="{{url('/updatecart')}}" enctype="multipart/form-data">
                          @csrf
                              <div class="form-group">
                                  {{-- <label for="">Update Quantity</label> --}}
                                  <input type="text" class="form-control" id="pizza_quantity" name="pizza_quantity">
                              </div>
                              <input type="hidden" name='id' value="{{$carts->id}}">
                              <input type="hidden" name='cart_price' id='cart_price' value="{{$carts->cart_price}}">
                              <button class="btn btn-primary btn-blue">Update Quantity</button>
                          </form>


                          <form method="POST" action="{{url('/deletecart')}}">
                            @csrf
                            <input type="hidden" name='id'value="{{$carts->id}}">
        
                            <div class="spasibawah1"><button class="btn btn-primary btn-danger">Delete from Cart</button>
                            </div>
                            </form>
                        {{-- <p class="cartfont">id: {{$carts}}</p> --}}
                        </div>
                        

                  </div>
          @endforeach
     
          
       
          <form method="POST" action="{{url('/checkout')}}">
            @csrf
            {{-- <input type="hidden" name='id'value="{{$carts->id}}"> --}}
            <div class="col text-center">
            <div class="spasi2"><button class="btn btn-primary btn-dark">Checkout</button>
            </div>
            </form>
   
</body>


@endsection