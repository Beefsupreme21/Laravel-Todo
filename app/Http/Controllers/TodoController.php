<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() 
    {
        $todos =  Todo::all();

        return view('todo.index', [
            'todos' => $todos, 
        ]);
    }

    public function create() 
    {
        return view('todo.create');
    }

    public function edit() 
    {
        $todos =  Todo::all();

        return view('todo.edit', [
            'todos' => $todos, 
        ]);
    }

    public function store(Request $request) 
    {   
        $todo = $request->validate([
            'title' => 'required|max:255'
        ]);

        Todo::create($todo);
        return back()->with('success', "Todo created successfully");
    }

    public function update(Request $request, Todo $todo) 
    {   
        $todoUpdated = $request->validate([
            'title' => 'required|max:255'
        ]);

        $todo->update($todoUpdated);

        return back()->with('success', "Todo created successfully");
    }

    public function destroy($id) 
    {
        $todo = Todo::find($id);
        $todo->delete();

        return back();


    }
}
