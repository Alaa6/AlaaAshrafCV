<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <title>{{env('APP_NAME','AlaaAshraf_SoftwareEngineer')}}</title>
</head>
<body>
    @include('includes.navbar')
    
<div class="container"> 
    <div class="mb-3"></div>
    @include('includes.messages') 
        <h1>@yield('title')</h1>
       <h3> @yield('content') </h3> 
</div>

<script src="{{asset('js/app.js')}}"> </script>
       
</body>
</html>