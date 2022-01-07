<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $allUsers = User::orderBy('id', 'desc')->get();
        return view('admin.user.index', compact('allUsers'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        User::insert([
            'name' => $request->userName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        $message = "User Create Successfully!";
        return redirect()->back()->with('message', $message);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->userName;
        $user->update();
        $message = "User Update Successfully!";
        return redirect()->route('admin.users')->with('message', $message);
    }

    public function softdelete()
    {
    }

    public function restore()
    {
    }

    public function destroy()
    {
    }
}
