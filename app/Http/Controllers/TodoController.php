<?php

namespace App\Http\Controllers;

use App\Models\todoapp;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        return view('welcome', ['list' =>todoapp::all()]);
        
    }
    public function delete($id)
    {
        $data= todoapp::find($id);
        $data->delete();
        return view('welcome', ['list' =>todoapp::all()]);
        
    }

    public function edit($id)
    {
        $data = todoapp::find($id);
        return view('edit', ['data' => $data]);
    }

    public function updateTodo(Request $req)
    {
        $todoObj = todoapp::find($req->id);
        $todoObj->title = $req->todo;
        $todoObj->save();
        return redirect('/');

    }

    public function saveTodo(Request $req)
    {
        print_r($req->all());
        //save data to db
        $todoObj = new todoapp();
        // $todoObj->title = 'test';
        $todoObj->title = $req->todo;

        $todoObj->save();

        return redirect('/');
        // return view('welcome');

    }

}
