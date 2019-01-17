@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$task->title}}</h1>
                <p>{{$task->description}}</p>
            </div>
        </div>
    </div>
@endsection