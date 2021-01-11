@extends('todos.layout')        
        
@section('content')
    <h1>All To-Do's</h1>
    <ul>
        @foreach($data as $todo) 
            <li>
                {{$todo->title}}
            </li>
        @endforeach
    </ul>
@endsection

