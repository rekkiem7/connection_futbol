<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @include('librerias')
    

</head>
<body>
<div class="container">
    <div class="row">        
       
            @extends('layouts.entreligas')
             @section('content')

     

          
        {{Session::get('name').' '.Session::get('lastname')}}
    </div>
</div>
</body>

</html>