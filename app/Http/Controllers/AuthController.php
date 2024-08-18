<?php

namespace App\Http\Controllers;

use Hash, Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Events\UserLoggedIn;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|email|unique:users,email',
            'password' => 'required|min:3',
        ]);

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

        Auth::login($user);
        event(new UserLoggedIn($user));

        return response()->json([
            'status' => true,
            'redirect' => route('home'),
        ]);
    }
}
