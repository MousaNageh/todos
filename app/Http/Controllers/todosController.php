<?php

namespace App\Http\Controllers;

use App\todos;
use Illuminate\Http\Request;

class todosController extends Controller
{
    public function index(){

        return view("todos.index")->with("todos",todos::all()) ;
    }
    public function show (todos $todos){

        return view("todos.show")->with("todo",$todos);

    }
    public function create(){
        return view("todos-create") ;
    }
    public function store(){
        $this->validate(request(),[
            "name"=>"required",
            "description"=>"required"
        ]);
        $data = request()->all() ;
        $todo = new todos () ;
        $todo->name = $data["name"] ;
        $todo->description = $data["description"] ;
        $todo->completed = false ;
        $todo->save() ;
        session()->flash("success","the todos created successfully.") ;
        return redirect("/todos") ;
    }
    public function edit(todos $todos){
        return view("todos.edit")->with("todo",$todos) ;
    }
    public function update($todo_ID){
        $this->validate(request(),[
            "name"=>"required",
            "description"=>"required"
        ]);
        $data = request()->all() ;
        $todo  = todos::find($todo_ID) ;
        $todo->name = $data["name"] ;
        $todo->description = $data["description"] ;
        $todo->save() ;
        return redirect("/todos") ;
    }
    public function destroy($todos_ID){
        $todo = todos::find($todos_ID) ;
        $todo->delete() ;
        return redirect("/todos") ;
    }
    public function complete(todos $todos){
        $todos->completed =true ;
        $todos->save() ;
        session()->flash('success' , "the dotos is completed successfully") ;
        return redirect("/todos") ;
    }
}
