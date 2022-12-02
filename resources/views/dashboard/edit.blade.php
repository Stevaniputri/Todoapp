@extends('layout')

@section('content')
<div class="custom-shape-divider-top-1669965652">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
<div class="create-container mb-5">  
  <form id="create-form" method="POST" action="{{ route('todo.update',$todo['id']) }}">
    @method('PATCH')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h3>Edit Todo</h3>
    @csrf
    <fieldset>
        <label for="">Title</label>
        <input placeholder="title of todo" type="text" name="title" value="{{ $todo['title'] }}">
    </fieldset>
    <fieldset>
        <label for="">Target Date</label>
        <input placeholder="Target Date" type="date" name="date" value="{{ $todo['date'] }}">
    </fieldset>
    <fieldset>
        <label for="">Description</label>
        <input type="text" placeholder="Type your descriptions here..."  name="description" value="{{ $todo['description'] }}"></input>
    </fieldset>
    <fieldset>
        <button name="submit" type="submit" id="contactus-submit">Recreate</button>
    </fieldset>
    <fieldset>
        <button name="submit" type="submit"><a href="/todo/todolist"> Cancel </a></button>
    </fieldset>
  
  </form>
</div>

@endsection