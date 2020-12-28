
     @extends('layouts.app')

     @section('content')
         <div class="container">
             <div class="row">
            
                <div class="flex">
                @foreach ($users as $user)
                <div class="col-3">
                    <div class="spasibawah">
                        <div class="card" style="width: 13rem;">
                        
                        
                          {{-- <div class="card-body">
                            <a> User ID: {{$user->id}}</a>
                            <p class="card-text">Username: {{$user->name}}</p>
                            <p class="card-text">Email: {{$user->email}}</p>
                            <p class="card-text">Address: {{$user->address}}</p>
                            <p class="card-text">Phone Number: {{$user->phone}}</p>
                            <p class="card-text">Gender: {{$user->gender}}</p> --}}

                            <div class="card text-white bg-danger mb-3" style="max-width: 30rem;"> 
                                <div class="card-header">User ID: {{$user->id}}</div>
                            </div>
                            <div class="card-body" style="max_width: 25rem;">
                            <p class="card-text">Username: {{$user->name}}</p>
                            <p class="card-text">Email: {{$user->email}}</p>
                            <p class="card-text">Address: {{$user->address}}</p>
                            <p class="card-text">Phone Number: {{$user->phone}}</p>
                            <p class="card-text">Gender: {{$user->gender}}</p>
                              </div>
                           
                          </div>
                        </div>
                        </div>
                </div>
                @endforeach
             </div>
       
             
     @endsection