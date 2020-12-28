@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
       
        
          <div class="flex">
            <div class="spasi">
                <img width="500px" height="500px"src="{{asset('storage/images/pizza/'.$pizza->pizza_image)}}" alt="Card image cap">
                    
                </div>
                <div class="tulisanDetail">
                <p class="pizzaname">{{$pizza->pizza_name}}</p>
                <p class="spasi2">{{$pizza->pizza_description}}</p>
                <p class="price">Rp. {{$pizza->pizza_price}}</p>
                    
                  <form method="POST" action="{{url('/pizzaremove')}}">
                    @csrf
                    <input type="hidden" name='id'value="{{$pizza->id}}">

                    <div class="spasi2"><button class="btn btn-primary btn-danger">Delete Pizza</button>
                    </div>
                    
                        
                    </form>
        
             
                    
                  </div>
                </div>
                </div>
               
        </div>
  
       
</body>


@endsection