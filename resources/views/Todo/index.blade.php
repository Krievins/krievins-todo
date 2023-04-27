@extends('layouts.main', [
    'stylesheet' => mix('css/Todo/index.css'),
    'title' => 'Home',
    // 'pagename' => 'Sākums'
])

@section('content')
        <div class="todo">
            <a class='todo__add' href="{{ url('/addnew') }}">+</a>
            <div class="todo__navigation">
                <div class="todo__navigation__box">
                    <div class="todo__navigation__box--logo">
                        <a href="{{ url('/home') }}" class="todo__navigation__box--logo---tittle">Todo</a>
                        <p class="todo__navigation__box--logo---undertext">Powered By Toms</p>
                    </div>
                    <div class="todo__navigation__box--nav">
                        <p class="todo__navigation__box--nav---user">Welcome, {{ auth()->user()->name }}</p>
                        <a class='todo__navigation__box--nav---button' href="{{ url('/logout') }}">(Logout)</a>
                        {{-- <a class='todo__navigation__box--nav---button' href="{{ url('/addnew') }}">+</a> --}}
                    </div>
                </div>
            </div>
            <div class="todo__container">
                <a class="todo__container--heading">Due Today</a>
                <div class="todo__container__list">
                    @foreach ($today as $data)
                        <div class="todo__container__list__box">
                            <p class="todo__container__list__box--title">- {{ $data->title }}</p>
                            <p class="todo__container__list__box--desc">{{ $data->description }}</p>
                            <p class="todo__container__list__box--date">Due To: {{ $data->end_date }}</p>
                            <a class="todo__container__list__box--edit" href="{{ route('todo.edit', $data->id) }}">Edit</a>
                            <form class="todo__container__list__box--delete" action="{{ route('todo.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="todo__container__list__box--delete---btn" type="submit">Done</button>
                            </form>
                        </div>
                    @endforeach
                </div>
                <a class="todo__container--heading">Upcoming</a>
                <div class="todo__container__list">
                    @foreach ($upcoming as $data)
                        <div class="todo__container__list__box">
                            <p class="todo__container__list__box--title">- {{ $data->title }}</p>
                            <p class="todo__container__list__box--desc">{{ $data->description }}</p>
                            <p class="todo__container__list__box--date">Due To: {{ $data->end_date }}</p>
                            <a class="todo__container__list__box--edit" href="{{ route('todo.edit', $data->id) }}">Edit</a>
                            <form class="todo__container__list__box--delete" action="{{ route('todo.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button  class="todo__container__list__box--delete---btn" type="submit">Done</button>
                            </form>
                        </div>
                    @endforeach
                </div>
                <a class="todo__container--heading">All Todos</a>
                <div class="todo__container__list">
                    @foreach ($todos as $todo)
                        <div class="todo__container__list__box">
                            <p class="todo__container__list__box--title">- {{ $todo->title }}</p>
                            <p class="todo__container__list__box--desc">{{ $todo->description }}</p>
                            <p class="todo__container__list__box--date">Due To: {{ $todo->end_date }}</p>
                            <a class="todo__container__list__box--edit" href="{{ route('todo.edit', $todo->id) }}">Edit</a>
                            <form class="todo__container__list__box--delete" class="todo__container__list__box--edit" action="{{ route('todo.destroy', $todo->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button  class="todo__container__list__box--delete---btn" type="submit">Done</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

@endsection