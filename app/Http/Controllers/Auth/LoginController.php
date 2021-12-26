<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
      public function __construct()
      {
            $this->middleware('guest');
      }

      public function index()
      {
            return view('auth.login');
      }

      public function store(Request $request)
      {
            $this->validate($request, [
                  'username' => 'required',
                  'password' => 'required',
            ]);

            if (!auth()->attempt($request->only('username', 'password'))) {
                  return back()->with('status', 'Invalid Login Details');
            };
            
            $request->session()->put('tahun', $request->tahun);
            
            return redirect('/beranda/');
      }

      public function register()
      {
            $bidang =  ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin'];

            return view('auth.register', [
                  'bidang' => $bidang,
            ]);
      }

      public function register_store(Request $request)
      {

            $user = new User();
            $password = bcrypt($request->password);
            $user->user_profile = 'user.png';

            $user->nama = $request->nama;
            $user->username = $request->username;
            $user->password = $password;
            $user->email = "user@mail";
            $user->nip = 123;
            $user->gender = "Pria";
            $user->nomor_telepon  = 123;
            $user->bidang = $request->bidang;

            $user->save();

            return redirect('/login/');
      }
}
