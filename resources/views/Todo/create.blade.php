@extends('layouts.main', [
    'stylesheet' => mix('css/Todo/create.css'),
    'title' => 'Add new - Create New Todo',
    // 'pagename' => 'Sākums'
])

@section('content')
    <div class="container">
        <div class="add">
            <div class="add__box">
                <h1 class="add__box--heading">Add New Todo</h1>
            </div>
            <div class="add__formbox">
                <form class="add__formbox__form" action="/addnew" method="post">
                    @csrf
                    <label class="add__formbox__form--label" for="title">Title</label>
                    <input class="add__formbox__form--input"  type="text" name="title" id="title">
                    @error('title')
                        <p class="add__formbox__form--error">Title Must Be more than 15 Characters Long</p>
                    @enderror
                    <label class="add__formbox__form--label" for="description">Description</label>
                    <input class="add__formbox__form--input" type="text" name="description" id="description">
                    <label class="add__formbox__form--label" for="date">Due To</label>
                    <input class="add__formbox__form--input" type="date" name="end_date" id="end_date">
                    @error('end_date')
                        <p class="add__formbox__form--error">End Date Must Be Added</p>
                    @enderror
                    <button class="add__formbox__form--button" type="submit">Add</button>
                </form>
            </div>
        </div>
    </div>
    

    
@endsection