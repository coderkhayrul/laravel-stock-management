<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;
// use Intervention\Image\ImageManager as Image;

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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'role_id' => 'required',
        ], [
            'name.required' => 'Enter Your User Name',
            'email.required' => 'Enter Your Email',
            'password.required' => 'Enter Your Password',
            'role_id.required' => 'Select Your Role Name',
        ]);

        $insert = User::insertGetId([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        // User Image Store
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'user' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/user/' . $imageName);

            User::where('id', $insert)->update([
                'image' => $imageName,
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        if ($insert) {
            Session::flash('success', 'User Created successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'User Created Failed!');
            return redirect()->back();
        }
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

    public function update(Request $request, $id)
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
