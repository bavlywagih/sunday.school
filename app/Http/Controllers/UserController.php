<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use App\Models\Grade;


class UserController extends Controller
{

    public function users()
    {
        // dd(request('search'));
        if (request('search')) {
            // $users = User::all();
            $users = User::where('username', 'like', '%' . request('search') . '%')->orWhere('name', 'like', '%' . request('search') . '%')->orWhere('phone', 'like', '%' . request('search') . '%')->orWhere('address', 'like', '%' . request('search') . '%')->orWhere('nu_father', 'like', '%' . request('search') . '%')->get();
        }
        else {
            $users = User::all();
        }
        return view('user.user' ,compact('users'));
    }

    public function create()
    {
        $grades = Grade::orderBy('id', 'desc')->get();
        return view('user.create.create-user' , ['grades' => $grades]);
    }

    public function delete_user( $id){
        user::findorfail($id)->delete();
        return redirect()->route('users');
    }
    
    public function user(Request $request)
    {
        $validated = $request->validate([
            'name' =>['required'],
            'username' => ['required'],
            'password' => ['required' , 'min:8', 'max:120'],
            'phone' => ['required', 'numeric'],
            'birthday' => ['required', 'date'],
            'address' => ['required'],
            'facebook' => ['required'],
            'our_father' => ['required'],
            'nu_father' => ['required', 'numeric'],
            'role' => ['required', 'numeric'],
        ]);


        user::create([
            'name' =>  $validated['name'],
            'username' =>  $validated['username'],
            'password' =>  $validated['password'],
            'phone' => $validated['phone'],
            'birthday' =>  $validated['birthday'],
            'address' =>  $validated['address'],
            'facebook' =>  $validated['facebook'],
            'nu_father' =>  $validated['nu_father'],
            'our_father' =>  $validated['our_father'],
            'role' =>  $validated['role'],
        ],);
        return redirect('/users');
    }

    public function tayo($id){
        $user = user::findorfail($id);
        return view('user.tayo.create',
        compact('user')
    );
    }

    public function information($id)
    {
        $user = user::findorfail($id);
        $grades = Grade::orderBy('id', 'desc')->get();

        return view('user.information.create', [
            'user' => $user,
            'grades' => $grades
        ]);
    }

    public function information_update(Request $request, $id)
    {
        $validated = $request->validate([
            'username' => ['required'],
            'address' => ['max:255'],
            'facebook' => ['max:255'],
            'nu_father' => ['required', 'numeric'],
            'our_father' => ['required'],
            'grade_id' => ['required'],
        ]);
        DB::table('users')->where('id', $id)->update([
            'username' =>  $validated['username'],
            'address' =>  $validated['address'],
            'facebook' =>  $validated['facebook'],
            'nu_father' =>  $validated['nu_father'],
            'our_father' =>  $validated['our_father'],
            'grade_id' =>  $validated['grade_id'],
        ]);
        return redirect('/users');
    }

    public function tayo_update(Request $request , $id){
        $validated = $request->validate([
            'tayo' => [ 'numeric'],
        ]);
        DB::table('users')->where('id', $id)->update(['tayo'  => $validated['tayo']]);
        return redirect('/users');
    }

    public function more_confirmation( $id)
    {
        $user = user::findorfail($id);
        return view('user.information.more_confirmation',compact('user'));
    }

    public function more_confirmation_update(Request $request, $id)
    {
        $validated = $request->validate([
            'password' => ['required'],
        ]);
        if ($validated['password'] != auth()->user()->password ) {
            return redirect()->back()->withErrors(['password' => 'الباسورد خطأ!']);
        }else{
            return redirect()->route('update_information' , compact('id'));
        }
    }

    public function update_information($id)
    {
        $user = user::findorfail($id);
        return view('user.information.update_information', compact('user'));
    }

    public function update_information_finished(Request $request, $id)
    {
        $validated = $request->validate([
            'password' => ['required' ,'min:8', 'max:120'],
            'role' => ['required', 'numeric'],
        ]);
        $user = user::findorfail($id);
        if ($validated['password'] == $user->password) {
            return redirect()->back()->withErrors(['password' => ' لم يتم تغير الباسورد!']);
        } else {
            DB::table('users')->where('id', $id)->update([
                'password' =>  $validated['password'],
                'role' =>  $validated['role'],
            ]);
            return redirect()->route('users');
        }
    }
}
