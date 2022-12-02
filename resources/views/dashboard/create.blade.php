@extends('layout')

@section('content')

<div class="bg-grey" >  
  <form id="create-form" method="POST" action="/todo/store">
    @csrf
    <h3>Create Todo</h3>
    
    <fieldset>
        <label for="">Title</label>
        <input placeholder="title of todo" type="text" name="title">
    </fieldset>
    <fieldset>
        <label for="">Target Date</label>
        <input placeholder="Target Date" type="date" name="date">
    </fieldset>
    <fieldset>
        <label for="">Description</label>
        <input type="text" placeholder="Type your descriptions here..." tabindex="5" name="description"></input>
    </fieldset>
    <fieldset>
        <button name="submit" type="submit" id="contactus-submit">Submit</button>
    </fieldset>
    <fieldset>
        <button name="submit" type="submit"><a href="/todo/todolist"> Cancel </a></button>
    </fieldset>
  
  </form>
</div>
@endsection