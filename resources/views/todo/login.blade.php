@extends('todo.layouts.default')

@section('content')

    @foreach ($errors->all() as $errors)
        <div class='errors'>{{ $errors }}</div>    
    @endforeach

    {{ Form::open(array('route' => 'user-login')) }}
    <input type="text" name='username' placeholder="username">
    <input type="text" name='password' placeholder="password">
    <button type="submit">Submit</button>
    {{ Form::close() }}
@stop