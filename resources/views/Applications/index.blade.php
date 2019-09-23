@extends('layouts.master')

@section('title')
<h1>My projects are :</h1>

<hr>
<div class="row">
    <div class="col-md-9">
    <div class="row">
            @foreach ($App as $Application)
            <div class="col-md-4">
                    <div class="card mb-3" style="max-width:18rem">
                            <div class="card-header bg-dark text-white">
                                {{$Application->title}}
               
                            </div>
                            <div class="card-body">
                                   <div class="card-title">
                                      
    
                                    </div>
                                    <div class="card-text">
                                           {{$Application->body}}
                               
               
                                    </div>
                                <a href="{{'/Applications/'.$Application->id}}" class="btn btn-primary"> show more</a>
               
                            </div>
               
                        </div>
                           
    
            </div>
             
            @endforeach
            
        
    </div>
        

    </div>
    <div class="col-md-3">
        <div class="card mb-3" style="max-width:18rem">
            <div class="card-header bg-info text-white">stats.</div>
            <div class="card-body">
                <p class="card-text">
                    All projects :{{$count}}
                </p>
            </div>

        </div>
        @auth
        <a href="/Applications/create" class="btn btn-primary"> Create new Project</a>
        @endauth

        

        </div>

</div>
<div class="row">
    <div class="col-md-12 d-flex justify-content-center">
        {{ $App->links() }}
    </div>

</div>

    
@endsection