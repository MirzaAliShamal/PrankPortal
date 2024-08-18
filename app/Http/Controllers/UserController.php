<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $user = auth()->user();
       
        if($user->status == 'submitted' || $user->status == 'waiting command') {
            return view('verify');
        } 
        if ($user->status == 'waiting otp') {
            return view('otp');
        }
        if ($user->status == 'waiting info') {
            return view('two_fa');
         } 
        if($user->status == 'finish') {
            return view('home');
        }
    }
}
