<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoachRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coaches = User::where('type', 'coach')->paginate(25);
        return view('admin-panel.coaches.index', compact('coaches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.coaches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CoachRequest $request)
    {
        $path = $request->file('imageUrl')->store('public');
        $data = array_merge($request->all(), [
            'type' => 'coach',
            'imageUrl' => $path
        ]);

        User::create($data);
        return redirect('admin/coaches');
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
    public function edit(string $id)
    {
        $coach = User::where('id' , $id)->first();
        return view('admin-panel.coaches.edit' , compact('coach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CoachRequest $request, User $coach)
    {
        $data = $request->all();

        if ($request->hasFile('imageUrl')) {
            $path = $request->file('imageUrl')->store('public');
            Storage::delete($coach->imageUrl);
            $data['imageUrl'] = $path;
        }

        $coach->update($data);
        return redirect('/admin/coaches');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $coach)
    {
        Storage::delete($coach->imageUrl);
        $coach->delete();
        return redirect('/admin/coaches');
    }
}
