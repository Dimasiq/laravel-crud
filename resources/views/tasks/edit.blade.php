@extends('layout')

@section('content')
    <div class="container">
    <h3>Edit Task #{{ $task->id }}</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['tasks.update', $task->id], 'method'=>'PUT']) !!}

                    <div class="form-group">
                        <input type="text" name="title" class="form-control" value="{{ $task->title }}">
                        <br>
                        <textarea name="description" cols="30" rows="10" class="form-control">{{ $task->description }}</textarea>
                        <br>
                        <button class="btn btn-warning">Submit</button>
                    </div>
                
                {!! Form::close() !!}
                @include('errors')
            </div>
        </div>
    </div>
@endsection