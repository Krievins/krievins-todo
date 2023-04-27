<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TodosController extends Controller
{
    
    public function index()
    {

        $todos = Todos::all()->where('user_id', auth()->user()->id);
        $today = Todos::whereDate('end_date', Carbon::today())->where('user_id', auth()->user()->id)->get();
        $upcoming = Todos::whereBetween('end_date', [Carbon::today()->addDay(), Carbon::today()->addDays(3)])->where('user_id', auth()->user()->id)->get();

        return view('Todo.index', compact('todos', 'today', 'upcoming'));

    }

    public function add_index () {

        return view('Todo.create');

    }

  
    public function create() {

        

        $attributes = request()->validate([
            'title' => ['required', 'min:15'],
            'description' => ['nullable'],
            'end_date' => ['required'],
        ]);

        

        $attributes['user_id'] = auth()->user()->id;

        // ddd($attributes);

        $todo = Todos::create($attributes);

        return redirect('/home');

    }


    public function edit($id) {

        $todo = Todos::findOrFail($id);
        return view('Todo.edit', compact('todo'));

    }


    public function update(Request $request, $id) {

        $todo = Todos::findOrFail($id);
        $todo->update($request->all());
        return redirect('/home');

    }

    public function destroy($id) {

        $todo = Todos::findOrFail($id);
        $todo->delete();
        return redirect('/home');

    }
}
