<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        if(Auth::id()){

            $user_type=Auth()->user()->user_type;

            if($user_type==0){
                return view ('dashboard');//kullanici sayfasi
            }

            else if($user_type==1){
                return view('index');//yönetim paneli
            }
            else{
             return redirect()->back();
            }
        }

    }
}
