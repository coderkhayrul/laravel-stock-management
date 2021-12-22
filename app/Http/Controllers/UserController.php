<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.user.index');
    }

    public function create()
    {
    }

    public function edit()
    {
    }

    public function view()
    {
    }

    public function update()
    {
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
