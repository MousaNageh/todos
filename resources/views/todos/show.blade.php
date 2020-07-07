@extends('templates.app')
@section('title')
    todo
@endsection
@section('content')
<div class="container">
    <h2 class="text-center my-5">{{$todo->name}}</h2>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-default">
                <div class="card-header">
                    detials
                </div>
                <div class="card-body">
                    {{$todo->description}}
                    <div class="my-4">
                    <a href="/todos/{{$todo->id}}/edit" class="btn btn-primary "> edit</a>
                    <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger "> delete </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
