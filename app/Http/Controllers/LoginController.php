<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facedes\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('index')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('dashboard');
        }
    }

    public function login()
    {
        return view ('index');
    }       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postlogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $data = ModelUser::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('dashboard');
            }
            else{
                return redirect('/')->with('alert','Password, Salah !');
            }
        }
        else{
            return redirect('/')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }
}



