@extends('layouts.main', [
    'stylesheet' => mix('css/Todo/edit.css'),
    'title' => 'Edit - Update Todo',
    // 'pagename' => 'Sākums'
])

@section('content')
    <div class="container">
        <div class="edit">
            <div class="edit__box">
                <h1 class="edit__box--heading">Update Todo</h1>
            </div>
            <div class="edit__formbox">
                <p class="edit__formbox--end">
                    Created: {{ $todo->created_at}}
                </p>
                <form class="edit__formbox__form" action="{{ route('todos.update', $todo->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label class="edit__formbox__form--label" for="title">Title</label>
                    <input class="edit__formbox__form--input" type="text" name="title" value="{{ $todo->title }}">
                    <label class="edit__formbox__form--label" for="description">Description</label>
                    <textarea class="edit__formbox__form--input" name="description">{{ $todo->description }}</textarea>
                    <label class="edit__formbox__form--label" for="date">Date</label>
                    <input class="edit__formbox__form--input" type="date" name="end_date" value="{{ $todo->end_date }}">
                    <button class="edit__formbox__form--button" type="submit">Update</button>
                </form>
                <form class="edit__formbox__delete" action="{{ route('todo.destroy', $todo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="edit__formbox__delete--button" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
    

    
@endsection