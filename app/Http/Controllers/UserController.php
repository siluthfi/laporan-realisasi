<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function user_index(User $user)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        return view('user.index', [
            'users' => $user::all(),
            'title' => 'User'

        ]);
    }

    public function user_profile(){

        return view('user.profile', [
            'title' => 'User'
        ]);
    }

    public function user_detail(User $user)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        return view('user.detail', [
            'user' => $user,
            'title' => 'User'
            
        ]);
    }

    public function user_create(User $user)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $bidang =  ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin'];
        $gender = ['Pria', 'Perempuan'];

        return view('user.new', [
            'user' => $user,
            'bidang' => $bidang,
            'title' => 'User',
            'gender' => $gender
        ]);
    }

    public function user_store(Request $request)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $user = new User();
        $password = bcrypt($request->password);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $user->user_profile = $imageName;
        } else {
            $user->user_profile = 'user.png';
        }

        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = $password;
        $user->email = $request->email;
        $user->nip = $request->nip;
        $user->gender = $request->gender;
        $user->nomor_telepon  = $request->nomor;
        $user->bidang = $request->bidang;

        $user->save();

        return redirect()->back()->with('status', 'User berhasil ditambahkan');
    }

    public function user_edit(User $user)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $bidang =  ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin'];
        $gender = ['Pria', 'Perempuan'];


        return view('user.edit', [
            'user' => $user,
            'bidang' => $bidang,
            'gender' => $gender,
            'title' => 'User'
        ]);
    }

    public function user_update(Request $request, $id)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $user = User::find($id);
        $password = bcrypt($request->password);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);

            $user->user_profile = $imageName;
        } else {
            $user->user_profile = $user->user_profile;
        }


        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = $password;
        $user->email = $request->email;
        $user->nip = $request->nip;
        $user->gender = $request->gender;
        $user->nomor_telepon  = $request->nomor;
        $user->bidang = $request->bidang;

        $user->update();

        return redirect()->back()->with('status', 'User berhasil diperbarui');
    }

    public function user_delete($id)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $user = User::find($id);
        $user->delete();
        return redirect('/user/');
    }
}
