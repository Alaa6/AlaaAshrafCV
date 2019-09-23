@extends('layouts.master')

@section('content')

<div class="row mt-4 offset-md-2">
    <div class="col-md-9 ">
            <div class="card mb-3" >
               
                    <div class="card-body">
                           <div class="card-title">
                               {{$App->title}}
                       
       
                            </div>
                            <div class="card-text">
                                   {{$App->body}}
                       
       
                            </div>
                            <hr>
                            <div class="text-muted">
                                    <small><p> {{$App->created_at}}</p></small>
                            

                            </div>
                            <p style="color:darkblue">Created by : {{$App->user->name}}</p>

                            @auth
                               @if (auth()->user()->id == $App->user_id)
                               <a href="{{'/Applications/'.$App->id.'/edit'}}" class="btn btn-primary float-left mr-2"> Edit</a>
                               <form action="{{route('Applications.destroy',['id' =>$App->id])}}" method="POST">
                              @csrf
                              @method("delete")
                                <button type="submit" class="btn btn-danger float-left "> Delete</button>
                                   
                               @endif
                          
                            @endauth

                        </form>
       
                    </div>

    </div>
        
   
    </div>
</div>


    
@endsection