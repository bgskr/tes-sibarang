<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $user = User::all();

        return view('Admin.all-user', [
            'data' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required'],
            'fullname' => ['required'],
            'password' => ['required']
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $data = User::create($validated);

        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = User::find($id);

        // $update->fullname = $request->input('fullname');
        // $update->username = $request->input('fullname');
        // $update->password = $request->input('fullname');
        $update->is_active = $request->input('is_active');
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = User::findOrFail($id);
        $delete->delete();

        return redirect()->back();
    }
}
