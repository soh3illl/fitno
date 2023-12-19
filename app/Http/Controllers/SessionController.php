<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function showLoginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);

        $phone = $request->input('phone');
        $password = $request->input('password');

//        $user = DB::table('users')->whereRaw("phone = :phone AND password = :password" , ['phone' => $phone , 'password' => $password]);
        $user = DB::table('users')->where('phone' , $phone)->where('password', $password)->first();

        if ($user) {
            auth()->loginUsingId($user->id);

            if ($user->type == 'admin') {
                return redirect('/admin');
            }
            if ($user->type == 'coach') {
                return redirect('/coach');
            }
            if ($user->type == 'user') {
                return redirect('/user');
            }
        } else {
            return back();
        }



    }
}
