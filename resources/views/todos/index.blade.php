@extends('templates.app')
@section('title')
    all todos
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center h1 my-5">wellcome to do list  </h2>
            <div class="card card-default">
                <div class="card-header">
                    todos list
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">{{$todo->name }}
                                @if(!$todo->completed)
                                <a href="todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-right ml-2">complete </a>
                                @endif

                                <a href="todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">view </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

