@extends('layouts.app')

@section('content')
<div class="container">
    
            <div class="Tulisan1">
                Our freshly made pizza!
                </div>
            <div class="Tulisan2">
                Order it now!
                </div>
                @if (auth()->user()->role == 'admin')
                <button class="btn btn-sm btn-dark" type="button" onclick="window.location.href='/addpizza'" class="btn btn-secondary btn-lg btn-block">Add Pizza</button>
                @endif
                <div class="margintop">
            <div class="container">
                <div class="row">
                {{-- @if (isset($pizzas)) --}}
                
                @foreach ($pizzas as $pizza)
                <div class="col-3">
                    <div class="spasibawah">
                        <div class="card" style="width: 13rem;">
                        <img class="card-img-top"  src="{{asset('storage/images/pizza/'.$pizza->pizza_image)}}" alt="Card image cap">
                        
                          <div class="card-body">
                            {{-- <p class="card-text">{{$pizza->pizza_name}}</p> --}}
                            <a href="/pizzadetail/{{$pizza->id}}">{{$pizza->pizza_name}}</a>
                            <p class="card-text">{{$pizza->pizza_price}}</p>
                            @if (auth()->user()->role == 'admin')
                            
                            <button class="btn btn-sm btn-danger" type="button" onclick="window.location.href='/pizzadelete/{{$pizza->id}}'" class="btn btn-secondary btn-lg btn-block">Delete</button>
                            <button class="btn btn-sm btn-primary" type="button" onclick="window.location.href='/pizzaupdate/{{$pizza->id}}'" class="btn btn-secondary btn-lg btn-block">Update</button>
                                    
                       
                            @endif
                            
                          </div>
                        </div>
                        </div>
                </div>
                @endforeach
                    
                {{-- @endif --}}

            </div>
        
    
</div>
@endsection
