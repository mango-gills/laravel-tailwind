<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('index', ['todos' => $todos]);
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);

        Todo::create($attributes);

        return redirect('/');
    }

    public function update(Request $request, Todo $todo)
    {
        $completed = $request->input('isCompleted') ? true : false;
        $todo->isCompleted = $completed;
        $todo->save();

        return redirect("/");
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect('/');
    }
}
