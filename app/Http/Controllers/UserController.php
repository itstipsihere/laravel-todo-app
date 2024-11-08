<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
   
     //Create an account
    public function create(Request $request){
        
    // Validate the request data
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
    ]);

    // Create a new user instance
    $user = new User();
    $user->name = $data['name'];
    $user->email = $data['email'];
    $user->password = bcrypt($data['password']);
    $user->save();
    return redirect()->route("openLogin");

    }

    //signup page calling function
     public function takeLogin()
    {
        return view('welcome');
    }

    //crate an login user
    function home(){
        return view('homepage'); //home is a indx page of todo
    }

    function login(Request $request){
        $credential=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        
        if(Auth::attempt($credential)){
            return redirect()->route('todo.index');
        }else{
            return redirect()->back()->withErrors(['Invalid credentials']);
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('openLogin');
    }
}