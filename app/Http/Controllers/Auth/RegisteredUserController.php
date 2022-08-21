<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users', ],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'confirmed', 'min:8', Rules\Password::defaults()],
        ]);

        if($request->profile_image){

            $profileImage = time().'.'. $request->file('profile_image')->extension();
            $request->profile_image->move(public_path('upload/profile'),$profileImage);

            $ID = mt_rand(9, 999999999) + time();
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'status' => 1,
                'profile_image' => $profileImage,
                'password' => Hash::make($request->password),
            ]);
            $user->attachRole('user');
            event(new Registered($user));
        } else {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'status' => 1,
                'password' => Hash::make($request->password),
            ]);

            $user->attachRole('user');
            event(new Registered($user));
        }

        return redirect()->route('login');
    }
}
