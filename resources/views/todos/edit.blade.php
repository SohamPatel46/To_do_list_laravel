@extends('todos.layout')        
        
@section('content')
        <h1>Edit this TO-DO</h1>
        
        <form method="post" action="{{route('todo.update',$data->id)}}">
            @csrf
            @method('patch')   
            <input type="text" name="title" value="{{$data->title}}">
            <input type="submit" value="Update">
        </form>

        <a href="/todos/" style="border:solid; text-decoration:none;
     color:black; padding:2px;">back</a>

        <x-alert/>
@endsection