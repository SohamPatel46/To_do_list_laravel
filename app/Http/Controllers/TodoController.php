<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }

    public function create()
    {
        return view('todos.create');
    }
    public function edit()
    {
        return view('todos.edit');
    }
    public function store(TodoCreateRequest $request)
    {
        //validator is at -> /app/http/requests/TodoCreateRequest        

        Todo::create($request->all());
        return redirect()->back()->with('message','To-Do created');
    }
}
