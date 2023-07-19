<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Grade;




class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile/profile');
    }

    public function edit_profile()
    {
        $grades = Grade::orderBy('id', 'desc')->get();

        return view('/profile/ProfileEdit' , ['grades' => $grades]);
    }

    public function update_profile(Request $request, $id)
    {
        $request->validate([
            'username' => ['required'],
            'phone' => ['required'],
            'birthday' => ['required'],
        ]);
        DB::table('users')->where('id', $id)->update(['username'  => $request->username , 'phone'  => $request->phone , 'birthday'  => $request->birthday]);
        return redirect(route('profile'));
    }

    public function profile_id( $id)
    {
        $user = User::findOrFail($id);
        return view('profile/by-id/profile-id', [
            'user' => $user,
        ]);
    }

}
