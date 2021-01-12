<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;

use App\Models\Todo;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        //get data and pass to index

        //$todos = Todo::orderBy('completed')->get();        orderBy->sql  sortby->collection
            
        $todos= auth()->user()->todos->sortBy('completed');
        return view('todos.index')->with(['data'=>$todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit(Todo $id)            //todo $id will have whole data of that id passed
    {
        //dd($id->title);
        return view('todos.edit')->with(['data'=>$id]);
    }
    
    public function update(TodoCreateRequest $request,Todo $id)
    {
        //dd($request->all());
        $id->update(['title'=> $request->title]);
        return redirect(route('todo.index'))->with('message',"updated -> ".$request->title);
    }

    public function complete(Todo $id)
    {
        //dd($request->all());
        $id->update(['completed'=>true]);     //update is mass assigment hence 'completed' shoud be fillable
        return redirect(route('todo.index'))->with('message',"Task completed ");
    }

    public function incomplete(Todo $id)
    {
        //dd($request->all());
        $id->update(['completed'=>false]);     //update is mass assigment hence 'completed' shoud be fillable
        return redirect(route('todo.index'))->with('message',"Task Reversed ");
    }
    
    public function delete(Todo $id)
    {
        //dd($request->all());
        $id->delete();
        return redirect(route('todo.index'))->with('message',"Task Deleted ");
    }

    public function store(TodoCreateRequest $request)
    {
        //validator is at -> /app/http/requests/TodoCreateRequest  

        //Todo::create($request->all());

        //getting dataa with relationship      todo()->gives whole model    todos->give data as collections        
        auth()->user()->todos()->create($request->all());
        return redirect()->back()->with('message','To-Do created');
    }

}
