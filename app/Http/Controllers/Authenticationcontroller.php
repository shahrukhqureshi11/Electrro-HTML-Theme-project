<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\user;
class Authenticationcontroller extends Controller
{
    //
    public function store(Request $request){
        
        $data = $request->only('firstname','lastname','email','password');
        //INsent

        //1.QueryBuild

        //2.Eleqouent (production)

        user::create($data);
        //withSuccess() method will create a session variable of 'Success' 
       
        return redirect('/register')->withSuccess('User Registration successfull');
    }
    //public function method(class classObject)
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
    
        $user = user::where('email', $credentials['email'])->first();
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Store the firstname in the session correctly
            $request->session()->put('firstname', $user->firstname);
            return redirect()->intended('dashboard');
        }
    
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ])->onlyInput('email');
    }
    
       
    }
    
   // public function login(Request $request){//$request is a builtion object for receving data
        //login
        //dd($request->only('email','password'));//if you want to recive all parameters which is comming 
        //$credentials = $request->only('email','password');
        //$credentials is an associative array var ['key']
        //$credentials is not a classObject co ->method()
        
        //$user = user::where('email',$credentials['email'])->first();
      // dd($user->firstname);
      //  if (Auth::attempt($credentials)) {
           // $request->session()->regenerate();

            //I want to create a session variable
            //Classobject->method()->method2(aarg1,aarge2)
            //$request->session()->put('username','$user->firstname');
           // return redirect()->intended('dashboard');
        //}
 
        //return back()->withErrors([
           // 'email' => 'Invalid Credentials.',
       // ])->onlyInput('email');//

       
    //}
//
       
       



       
