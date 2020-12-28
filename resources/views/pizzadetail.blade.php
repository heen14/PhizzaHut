
     @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
       
          @if (auth()->user()->role == 'admin')
        <div class="flex">
            <div class="spasi">
                <img width="500px" height="500px"src="{{asset('storage/images/pizza/'.$pizza->pizza_image)}}" alt="Card image cap">
                    
                </div>
                <div class="tulisanDetail">
                <p class="pizzaname">{{$pizza->pizza_name}}</p>
                <p class="spasi2">{{$pizza->pizza_description}}</p>
                <p class="price">Rp. {{$pizza->pizza_price}}</p>
                @endif
                
                @if (auth()->user()->role == 'member')
                <div class="flex">
                  <div class="spasi">
                      <img width="500px" height="500px"src="{{asset('storage/images/pizza/'.$pizza->pizza_image)}}" alt="Card image cap">
                          
                      </div>
                      <div class="tulisanDetail">
                      <p class="pizzaname">{{$pizza->pizza_name}}</p>
                      <p class="spasi2">{{$pizza->pizza_description}}</p>
                      <p class="price">Rp. {{$pizza->pizza_price}}</p>

                      <form method="POST" action="{{url('/buypizza')}}" enctype="multipart/form-data">
                        <div class="spasi2">
                        @csrf
                            <div class="form-group">
                            <label for="">Quantity</label>
                                <input type="text" class="form-control" id="pizza_quantity" name="pizza_quantity">
                            </div>
                            <input type="hidden" name='pizza_id' id='pizza_id' value="{{$pizza->id}}">
                            {{-- <input type="hidden" class="form-control" value="{{$pizza->id}}" id="pizza_id" name="pizza_id"> --}}
                            <input type="hidden" name='pizza_price' id='pizza_price' value="{{$pizza->pizza_price}}">

                            <button class="btn btn-primary btn-block">Add to Cart</button>
                {{-- <button class="btn btn-sm btn-primary" type="button" onclick="window.location.href='/buypizza/{{$pizza->id}}'" class="btn btn-secondary btn-lg btn-block">Add to cart</button> --}}
                      </form>
                @endif
        </div>
  
        
@endsection