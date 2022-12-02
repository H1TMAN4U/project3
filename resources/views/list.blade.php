@extends('layouts/header')
@extends('layouts/navigation1')
@section('content')
{{-- <table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
        <td>Instructions</td>
    </tr>
    @foreach ($recipes as $recipe)
    <tr>
        <td>{{$recipe['id']}}</td>
        <td>{{$recipe['name']}}</td>
        <td>{{$recipe['description']}}</td>
        <td>{{$recipe['instructions']}}</td>

    </tr>
    @endforeach
</table> --}}
@foreach ($recipes as $recipe)
<div class="flex justify-center">
    <div class="rounded-lg shadow-lg bg-white max-w-sm">
        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
        </a>
        <div class="p-6">
            <h5 class="text-black-900 text-xl font-medium mb-2">{{$recipe['name']}}</h5>
            <div class="text-gray-700 text-base mb-4">
                <div>
                    <h1 for="description"><b>Description:</b></h1>
                </div>
                <p>{{$recipe['description']}}</p>
                <p>{{$recipe['instructions']}}</p>
            </div>

        </div>
    </div>
</div>
@endforeach
{{-- 
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    @foreach ($ingredients as $ingredient)
    <tr>
        <td>{{$ingredient['id']}}</td>
        <td>{{$ingredient['name']}}</td>
    </tr>
    @endforeach
</table> --}}
@endsection