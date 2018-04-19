<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class ChangePasswordController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('backend.auth.change_password');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::getUser();

        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        if (Hash::check($request->get('current_password'), $user->password)) {
            $user->password = bcrypt($request->get('new_password'));
            $user->save();

            flash('Password change successfully')->success();
            return redirect()->back();
        } else {
            flash('Current password is incorrect')->error();

            return redirect()->back();
        }
    }
}
