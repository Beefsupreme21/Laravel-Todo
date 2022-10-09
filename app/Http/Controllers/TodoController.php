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
        return view('index');
    }

    public function store(Request $request) 
    {   
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $todo = $request->title;
        Todo::create(['title' => $todo]);
        return back()->with('success', "Todo created successfully");
    }

    public function destroy($id) 
    {
        $todo = Todo::find($id);
        $todo->delete();

        return back();


    }
}
