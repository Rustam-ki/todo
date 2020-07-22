@extends('todo.layouts.default')

@section('content')
<div class="container">
    <h1>Задания</h1>
    <div>
        <a class="border p-1" href="{{ URL::route('new-task') }}">Создать новое задание</a>
    </div>    
    <div class="row">
        <div class="col-sm-6">
            <ul class="list-group">
                @foreach ($items as $item)
                <li class="list-group-item">
                    {{ Form::open() }}
                    {{ $item->name }}
                    <input type="checkbox" class="right" id="item_{{ $item->id }}" {{ $item->done ? 'checked' : '' }}
                    onClick="this.form.submit()">
                    <label class="form-check-label" for="item_{{ $item->id }}"></label>
                    <input type="hidden" name="item_id" value="{{ $item->id }}" />
                    <span>Выполнил</span><br>
                    <span><a href="{{ URL::route('delete-task', $item->id) }}">Удалить задание</a></span>
                    {{ Form::close() }}
                </li>    
                @endforeach
            </ul>
        </div>
        <div class="col-sm-3">
            
        </div>    
              
    </div>
</div>            
@stop