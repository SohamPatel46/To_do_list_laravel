@extends('todos.layout')        
        
@section('content')
        <h1>What next you need TO-DO</h1>
        
        <form method="post" action="/todos/create">
            @csrf
            <input type="text" name="title">
            <input type="submit" value="Create">
        </form>

        <a href="/todos/" style="border:solid; text-decoration:none;
     color:black; padding:2px;">back</a>

        <x-alert/>
@endsection