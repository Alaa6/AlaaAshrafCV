@extends('layouts.master')

@section('content')

 <div class="col-md-9 offset-md-2">
     <h3> Edit the project </h3>
     <hr>

 <form action="{{'/Applications/'.$App->id}}" method="POST">
        @csrf
        @method('put')
         <div class="form-group">
             <label for="title"> Title </label>
         <input type="text" name="title" id="title" class="form-control" value="{{$App->title}}">

         </div>
         <div class="form-group">
                <label for="body"> Body </label>
         <textarea  name="body" id="body" cols="30" rows="4" class="form-control" >{{$App->body}}</textarea>
   
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button> 
       
            </div>
     </form>

 </div>
    
@endsection