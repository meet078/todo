<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //

    public function list(){
        $data = User::find(session()->get("signin"))->getTodo->where("done", 0);
        
        return view("todolist", ["data"=>$data]);
    }
    public function signin(Request $request){
        $validated = $request->validate([
            "email"=>"required|email",
            "password"=>"required",
        ]);
        $user = User::where("email", $request->email)->first();
        if($user && $user->password == $request->password){
            session()->put("signin", $user->id);
            return redirect("/");
        }
        else
            return redirect("/")->withErrors(array("validation"=>"Username and Password is incorrect"));

    }
    public function signup(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:users',
        ]);
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect("/");
    }
    
    public function complete(){
        $data = User::find(session()->get("signin"))->getTodo->where("done", 1);
        return view("complete", ["data"=>$data]);
        
    }
}
