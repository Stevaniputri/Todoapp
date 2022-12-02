@extends('layout')

@section('content')
<center>
<style>
    
    .dash-img img {
        width: 350px;
        margin-top: 35px;
    }

    .dash-img {
        margin-top: 10px;
    }

    .todo-button {
        width: 150px;
    }
</style>
<div class="wrapper bg-white">
    @if (Session::get('notAllowed'))
        <div class="alert alert-danger">
            {{ Session::get('notAllowed') }}
        </div>
    @endif
    <center>
    <div class="dash-img">
        <img src="assets/img/dash.svg">
    </div>
    
    <h3>Let's make your todo list!</h3>
    <div class="todo-button">
    <a href="{{route('todo.create')}}">
    <button id="submit" type="submit">Make Todo</button>
    </a>
    </div>
    </center>
@endsection