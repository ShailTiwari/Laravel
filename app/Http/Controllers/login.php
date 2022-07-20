<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class login extends Controller
{
    //
    public function index()
    {
       return view('login');
    }
    
     public function signup()
    {         
        return view('signup');
    }

     public function home()
    {
         $data= User::all();
        return view('welcome',['members'=>$data]);
    }
       public function logout()
    {
        if(session()->has('user'))
        {
         session()->pull('user');
        }
        return redirect('login');
    }

    public function postLogin(Request $request)
    { 
                 $request->validate(['email' => 'required',
                                   'password' => 'required',
                                   ]);
                $data= $request->input();
                $email=$request->email;
                $password=$request->password;

               $users =DB::select("Select * from users where email='$email' and password=$password");
               if ($users) 
               { 
                // return $users;         
                 $request->session()->put('user',$data['email']); 
                 return redirect('home');
               }
               else
               {
                return redirect('login');
               }
    }

  public function ragister(Request $request)
    { 
                        $request->validate(['email' => 'required',
                                   'password' => 'required',
                                   ]);
                        $User= new User;
                        $User->name=$request->name;
                        $User->email=$request->email;
                        $User->password=$request->password;
                        $User->save();
                        $getusers =DB::select("Select * from users where email='$request->email' and password='$request->password'");
               if ($getusers) 
               { 
                // return $users;         
                 $request->session()->put('user',$request->email); 
                 return redirect('home');
               }
               else
               {
                return redirect('login');
               }


                       // return $data= $request->input();
       // return User::all();

    }



    function getData()
    {
         return User::all();
    }


}
