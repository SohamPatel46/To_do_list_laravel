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

                <p>                    
                    {{$todo->title}}
                    
                    <a href="{{'/todos/'.$todo->id.'/edit'}}" style="text-decoration:none;
                        color:black; padding:2px;">
                        <span style="padding:5px;" class="fas fa-edit"/>
                    </a>

                    <span onclick="event.preventDefault();
                        if(confirm('Are you sure ?')){
                        document.getElementById('form-delete-{{$todo->id}}').submit()}" 
                        style="padding:5px; color:red" 
                        class="fas fa-trash"></span>
                    
                    <form style="display:none" id="{{'form-delete-'.$todo->id}}"
                        method="post" action="{{route('todo.delete',$todo->id)}}">
                        @csrf
                        @method('delete') 
                    </form> 

                    @include('todos.completeButton')               

                </p>                
            </li>
        @endforeach
    </ul>
    <x-alert/>
</div>
@endsection

