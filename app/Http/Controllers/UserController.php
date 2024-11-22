<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $users = User::all();
        return view('dashboard.user.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $request->validate([
            'first_name' => 'required|min:2|max:20',
            'last_name' => 'required|min:2|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:25',
            'mobile' => 'required|digits:11',
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'created_at' => now(),
        ]);
        return redirect()->route('user.list')->with('success','User created Successfully!');
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
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $user = User::find($id);
        return view('dashboard.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $request->validate([
            'first_name' => 'required|min:2|max:20',
            'last_name' => 'required|min:2|max:20',
            'email' => 'required|email',
            'mobile' => 'required|digits:11',
        ]);

        User::find($id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'updated_at' => now(),
        ]);
        return redirect()->route('user.list')->with('success','User updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        User::find($id)->delete();
        return back()->with('success','User deleted successfully');
    }
}
