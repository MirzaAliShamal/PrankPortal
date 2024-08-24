<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Rules\FileTypeValidate;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pageTitle = 'Dashboard';
        $users = User::get();
        return view('admin.dashboard', compact('pageTitle', 'users'));
    }

    public function getUserDetails(Request $request) 
    {
        $user = User::find($request->id);
        return response()->json([
            'user' => $user,
            'password' => $user->myPassword->password,
        ]);
    }

    public function userStatusUpdate(Request $request)
    {
        $user = User::find($request->user_id);

        if ($user) {
            $status = ($request->status === 'waiting command2') ? 'waiting command' : $request->status;
            $user->status = $status;
            $user->save();

            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function destroy($id) 
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['status' => false, 'message' => 'User not found.']);
        }
         $user->delete();
        return response()->json([
            'status' => true,
            'message' => 'Admin deleted successfully.'
        ]);
    }
}
