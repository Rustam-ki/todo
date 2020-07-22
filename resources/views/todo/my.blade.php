@extends('todo.layouts.default')

@section('content')
<h1>Items</h1>

<ul>
    @foreach ($items as $item)
    <li>
        {{ $item->name }}
    </li>    
    @endforeach
</ul>    
@stop