<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function login(){
        return view('backend.admin.login');
    }
    public function loginCheck(Request $request){
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password,'role'=>1])){
            return redirect('/admin/dashbroad');
        }
        else{
            return redirect()->back();
        }

    }
    public function dashbroad(){
        if(Auth::user()){
            if(Auth::user()->role== 1){
                return view('backend.admin.dashbroad');
            }else{
                return redirect()->back();
            }
        }
    }

}
