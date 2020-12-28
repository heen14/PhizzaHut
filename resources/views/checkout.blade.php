
     @extends('layouts.app')

     @section('content')
         <div class="container">
             <div class="row">
            
               
                @foreach ($chk as $chks)
                
                  
                        <div class="card" style="width: 60rem;">
                        
                            <div class="card text-white bg-danger mb-3" style="max-width: 60rem;"> 
                                <div class="card-header">Transaction At: {{$chks->created_at}}</div>
                                @if (auth()->user()->role == 'admin')
                                <div class="card-header">User ID: {{$chks->user_id}}</div>
                                <div class="card-header">Username: {{$chks->chkuser->name}}</div>
                              @endif
                              
                            </div>
                           
                           
                </div>
                @endforeach
             </div>
       
             
     @endsection