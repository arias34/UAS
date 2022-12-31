<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function data()
    {
        $user = DB::table('users')->paginate(5);

        return view ('admin.user', compact('user'));
    }

    public function add()
    {
        return view ('admin.add');
    }
    public function addProcess(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('user')->with('status', 'User berhasil ditambah!');
    }
    public function delete($id)
    {
        DB::table('users')->where('user_id', $id)->delete();
        return redirect('user')->with('status', 'User berhasil dihapus!');
    }


}

