<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function showFormRegister(){
        return view('register');
    }
    
    public function register(RegisterRequest $request){
        echo "register successfully registered";
    }
}