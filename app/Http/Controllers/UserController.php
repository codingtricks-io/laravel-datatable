<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use DataTables;
Use Alert;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user-management.user.index');
    }
    
    /* Get all users */
    public function getAllUsers()
    {
        $users = DB::table('users')->get();
        return DataTables::of($users)->make();
    }

    public function create()
    {
        return view('admin.user-management.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone'=> ['required','string'],
            'address'=> ['required', 'string'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user-management.user.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' =>  'string', 'max:255',
            'email' =>  'string', 'email', 'max:255', 'unique:users',
            'password' =>  'string', 'min:8',
            'phone'=> 'string',
            'address'=>  'string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];

        User::findOrFail($id)->update($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->back();
    }
}
