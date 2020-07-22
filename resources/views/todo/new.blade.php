@extends('todo.layouts.default')  

    @foreach ($errors->all() as $error)
        <div class='errors'>{{ $error }}</div>
    @endforeach
@section('content')    

    {{ Form::open() }}
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                
            </div>
            <div class="col-sm">             
                <div class="input-group mb-3">
                    <button class="btn btn-primary" type="submit">Создать новую задачу</button>
                    <div class="input-group-prepend">
                        <input  class="form-control" type='text' name='name' placeholder="заполни меня">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
         
            </div> 
        </div> 
    </div>           
        
    {{ Form::close() }}
@stop
 