@extends('templates.app')
@section('title')
    edit todos
@endsection
@section('content')
    <div class="container">
        <h2 class="h1 my-5 text-center">edit todos </h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        <h3>edit todos</h3>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="/{{$todo->id}}/update-todos" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="name" value="{{$todo->name}}">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="description" name="description" class="form-control">{{$todo->description}}</textarea>
                            </div>
                            <div class="form-group">
                            <input type="submit" class="btn btn-success btn-lg" value="save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
