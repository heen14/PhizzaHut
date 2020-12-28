
     @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
       
        
        <div class="flex">
            <div class="spasi">
                
                <img width="250" height="250px"src="{{asset('storage/images/pizza/'.$pizza->pizza_image)}}" alt="Card image cap">
            </div>
                
                <form method="POST" action="{{url('/pizzaupdate')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="pizzaname">Edit Pizza Details</div>
                    <div class="spasi2">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="pizza_name" name="pizza_name">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" class="form-control" id="pizza_description" name="pizza_description">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" id="pizza_price" name="pizza_price">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" id="pizza_image" name="pizza_image">
                        </div>
                        {{-- <form method="POST" action="{{url('/pizzaupdate')}}">
                            @csrf --}}
                            <input type="hidden" name='id'value="{{$pizza->id}}">
        
                       
                        <button class="btn btn-primary btn-blue">Edit Pizza</button>
                
                        </div>
                </form>       
                   
                

        </div>
  
        
@endsection