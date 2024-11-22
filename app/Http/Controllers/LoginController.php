<?php

namespace App\Http\Controllers;

use Abianbiya\Laralag\Modules\Role\Models\Role;
use Abianbiya\Laralag\Modules\RoleUser\Models\RoleUser;
use App\Models\User;
use App\Modules\Siswa\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function submit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);

        $user = array(
            'email' => $request->email,
            'password' => $request->password,
        );

        if (Auth::attempt($user)) {
            $user = Auth::user();
            if (count($user->roles) < 1) {
                Auth::logout();
                // $this->addError('email', 'User does not have any role assigned. Please contact support.');
                return redirect()->back()->with('message_danger', 'User does not have any role assigned. Please contact support.');
            }

            $user->setActiveRole($user->roles->first()->slug);
            $user->setRoleList();

            return redirect()->intended(filled(config('laralag.home_route', null)) ? route(config('laralag.home_route')) : '/');
        } else {
            return redirect()->back()->with('message_danger', 'Invalid email or password');
        }
    }

    public function register(Request $request)
    {
        return view('custom_register');
    }

    public function registerSubmit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'identitas' => 'numeric',
            'phone' => 'numeric',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $token = bin2hex(random_bytes(20));

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $emailParts = explode('@', $request->email);
        $user->username = $emailParts[0];
        $user->identitas = $request->identitas;
        $user->password = Hash::make($request->password);
        $user->remember_token = $token;
        $user->save();

        $roleuser = new RoleUser();
        $roleuser->role_id = Role::where('slug', 'siswa')->first()->id;
        $roleuser->user_id = $user->id;
        $roleuser->save();

        $mhs = new Siswa();
        $mhs->user_id = $user->id;
        $mhs->nama = $user->name;
        $mhs->email = $user->email;
        $mhs->nis = $user->identitas;
        $mhs->no_hp = $request->input('phone');
        $mhs->save();


        return redirect()->route('login')->with('message_success', 'User successfully registered. Please login.');
    }
}
