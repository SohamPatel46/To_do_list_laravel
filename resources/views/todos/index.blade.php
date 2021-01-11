@extends('todos.layout')        
        
@section('content')
<div>
    <h1>All To-Do's</h1>
    <a href="/todos/create" style="border:solid; text-decoration:none;
     color:black; padding:2px;">Add new</a>
</div>

<div>
    <ul style=" list-style-type: none;">
        @foreach($data as $todo) 
            <li style="padding:5px;">
                <p >{{$todo->title}}
                    <a href="{{'/todos/'.$todo->id.'/edit'}}" style="border:solid; text-decoration:none;
                     color:black; padding:2px;">Edit</a>
                <p>                
            </li>
        @endforeach
    </ul>
    <x-alert/>
</div>
@endsection

