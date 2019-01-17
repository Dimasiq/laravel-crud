@extends('layout')

@section('content')
    <div class="container">
        <h3>Create Task</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['tasks.store']]) !!}

                    <div class="form-group">
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        <br>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" value="{{ old('description') }}"></textarea>
                        <br>
                        <button class="btn btn-success">Submit</button>
                    </div>
                
                {!! Form::close() !!}
                @include('errors')
            </div>
        </div>
    </div>
@endsection