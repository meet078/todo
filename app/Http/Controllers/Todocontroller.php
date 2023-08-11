<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class Todocontroller extends Controller
{
    //
    public function add(Request $request){
        $validate = $request->validate([
            "title" => "required",
            "description" => "required",
            "complete" => "required",
        ]);
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->complete = $request->complete;
        $todo->user_id = session()->get("signin");
        $todo->save();
    
        return redirect("/todo");
    }
    public function delete($id){

        $row = Todo::find($id);
        $row->delete();
        return redirect("/todo");
    }
    public function done($id){
        $row = Todo::find($id);
        $row->done = true;
        $row->save();
        return redirect("/todo");
    }
    
}
