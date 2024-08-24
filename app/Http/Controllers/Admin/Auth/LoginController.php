<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.guest')->except('logout');
    }

    public function showLoginForm() {
        $pageTitle = "Admin Login";
        return view('admin.auth.login', compact('pageTitle'));
    }  

    public function login(Request $request)
    {
        $validator = $this->validator($request->only(['email', 'password']));

        if ($validator->passes()) {
            $loginField = filter_var($request['email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            $credentials = [
                $loginField => $request->input('email'),
                'password' => $request->input('password'),
            ];
            $remember = $request->has('remember') ? true : false;
            if (auth()->guard('admin')->attempt($credentials, $remember)) {
                return response()->json([
                    'status' => true,
                    'redirect' => route('admin.dashboard'),
                    'message' => 'Login Successfully.'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'redirect' => route('admin.login'),
                    'message' => 'Email or Password is incorrect.'
                ]);
            }
        } else {
            return response()->json([
                'status' => false,
                'redirect' => route('admin.login'),
                'message' => 'Please fill the required input field.',
                'errors' => $validator->errors()
            ]);
        }
    }

    protected function guard()
    {
        return auth()->guard('admin');
    } 

    public function logout(Request $request)
    {
        $this->guard('admin')->logout();
        $request->session()->invalidate();
        return  to_route('admin.login');
    }

    private function validator($data){
        $rules = [
            'email' => 'required',
            'password' =>'required'
        ];
        $messages = [
            'email_or_username.required' => 'Email must be required.',
            'password.required' => 'The Password field is required.',
        ];

        return Validator::make($data, $rules, $messages);
    }
}
