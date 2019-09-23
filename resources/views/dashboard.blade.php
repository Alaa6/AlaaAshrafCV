@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col"> Title</th>
                                <th scope="col"> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($Apps as $App)
                                <tr>
                                  <th scope="row"> {{$App->id}}</th>
                                  <th> {{$App->title}}</th>
                                  <th><a href="{{'/Applications/'.$App->id}}" class="btn btn-primary"> Show post</a></th>
                                </tr>
                                    
                                @endforeach
                            
                        </tbody>
                       
                    </table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
