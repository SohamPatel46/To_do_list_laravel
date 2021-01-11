@if($todo->completed)

    <span onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()" 
    style="padding:5px; color:green" 
    class="fas fa-check text-red"/>
    
    <form style="display:none" id="{{'form-incomplete-'.$todo->id}}" method="post" action="{{route('todo.incomplete',$todo->id)}}">
    @csrf
    @method('put') 
    </form> 


@else
    <span onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()" 
    style="padding:5px; color:red" 
    class="fas fa-check text-red"/>
    
    <form style="display:none" id="{{'form-complete-'.$todo->id}}" method="post" action="{{route('todo.complete',$todo->id)}}">
    @csrf
    @method('put') 
    </form> 

@endif
