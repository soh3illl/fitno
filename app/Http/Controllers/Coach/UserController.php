<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $users = DB::select('SELECT * FROM subscriptions WHERE coach_id = ?', [auth()->user()->id])->join('users' , 'users.id' , '=' , 'subscriptions.user_id')->get();
        $users = DB::table('subscriptions')->where('coach_id', auth()->user()->id)->join('users', 'users.id', '=', 'subscriptions.user_id')->get();
        return view('coach-panel.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin-panel.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $validate = $request->validate([
            'phone' => 'required',
            'sex' => 'required',
            'name' => 'required',
            'password' => 'required'
        ]);

        $coach = $user;

        $user = User::create($request->all());

        Subscription::create([
            'coach_id' => $coach->id,
            'user_id' => $user->id
        ]);


        auth()->loginUsingId($user->id);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin-panel.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin/users');
    }
}
