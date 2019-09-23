@extends('layouts.master')
@section('content')
<h1>{{$title}}</h1>

<ul >
    @foreach ($skills as $skills)
    <li>{{$skills}}</li>
        
    @endforeach

</ul>
    
@endsection