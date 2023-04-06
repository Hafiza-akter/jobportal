<?php

namespace App\Http\Controllers;

// use auth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    //show register form
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        // dd($request);
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required'],
            'password' => 'required|confirmed|min:6'
                ]);
        //password hash
        $formFields['password'] = bcrypt($formFields['password']);
        //create user
        $user = User::create($formFields);
        //auth login
        auth()->login($user);

        return redirect('/')->with('message','User created successfuly and logged in!');


    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You have beeb logged out!');
    }
//show login form
    public function login(){
        return view('users.login');
    }

    // login submit
    public function login_authenticate(Request $request){

        $formFielsds = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

       if(auth()->attempt($formFielsds)){
        $request->session()->regenerate();
        return redirect('/')->with('message','You are logged in!');
       }
       return back()->withErrors(['email'=>'invalid credentials'])->onlyInput('email');


        
    }
}
