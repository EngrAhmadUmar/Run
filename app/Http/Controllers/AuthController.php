<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{

    // REGISTER
    public function register(Request $request){

        $request->validate([
            'name' => 'required | string',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | string | confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 0
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);

    }

    //LOGIN
    public function UserLogin(Request $request){

        $data = $request->validate([
            'email' => 'required | email ',
            'password' => 'required | string'
        ]);

        $user = User::where('email', $data['email'])->first();

        // return $user;

        if(!$user || !Hash::check($data['password'], $user->password) || $user->role == 1 ){
            return response([
                'message' => 'Invalid login details'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);

    }

    public function AdminLogin(Request $request){

        $data = $request->validate([
            'email' => 'required | email ',
            'password' => 'required | string'
        ]);

        $user = User::where('email', $data['email'])->first();

        if(!$user || !Hash::check($data['password'], $user->password) || $user->role == 0 ){
            return response([
                'message' => 'Invalid login details'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);

    }

    //LOGOUT
    public function logout(Request $request){

        $request->user()->tokens()->delete();
        return [
            'message' => 'Logged out'
        ];
    }

    public function profile(Request $request){
        $user = Auth::user();
        return response()->json($user);
    }

    public function profileUpdate(Request $request){

        $validated = $request->validate([
           'name' => 'required',
           'email' => 'required | email',
           'username' => 'required',
           'phone' => 'required' ,
        //    'profile_image' => 'required'
        ]);

        if($request->profile_image){

            $profileImage = time().'.'. $request->file('profile_image')->extension();
            $request->profile_image->move(public_path('upload/profile'),$profileImage);

            $user = User::where('id', Auth::id());

            $update = $user->update([
               'name' => $request->name,
               'username' => $request->username,
               'email' => $request->email,
               'phone' => $request->phone,
               'profile_image' => $profileImage,
            ]);

            if($update){
                return back()->with('success', 'Profile updated successfully');
            } else{
                       return back()->with('error', "Error occured while updating profile");
            }

        } else {

            $user = User::where('id', Auth::id());

            $update = $user->update([
               'name' => $request->name,
               'username' => $request->username,
               'email' => $request->email,
               'phone' => $request->phone,
            ]);

            if($update){
                return back()->with('success', 'Profile updated successfully');
            } else{
                return back()->with('error', "Error occured while updating profile");
            }
        }

    }

    public function PasswordUpdate(Request $request){

        $request->validate([
            'current_password' => 'required',
            'password' => 'required | confirmed',
        ]);


         $user = User::where('id', Auth::id())->first();

             $password = Hash::check($request->current_password, $user->password);

             if(!$password){
                return response("Incorrect current password");
             }

             $passwordUpdate = User::where('id', Auth::id())
                        ->update([
                            'password' => Hash::make($request->password)
                        ]);

             if($passwordUpdate){
                return response("Password successfully updated");
             } else{
                return response("Password Update Failed");
             }

    }

    public function DeleteUsers($id){

        $user = User::where('id', $id)->delete();

        if($user){
            return back()->with('status', 'User have been deleted sucesfully.');
        }

    }

    public function bann($id){
        $user = User::where('id', $id)->update([
            'status' => 0
        ]);
        return back();
    }

    public function activate($id){
        $user = User::where('id', $id)->update([
            'status' => 1
        ]);
        return back();
    }

    // public function ProfileImage(Request $request){

    //     $request->validate([
    //         'profile_image' => 'required | image'
    //     ]);

    //     $profileImage = time().'.'. $request->file('profile_image')->extension();
    //     $request->profile_image->move(public_path('upload/profile'),$profileImage);

    //     // Profile::create([
    //     //     'user_id' => Auth::id(),
    //     //     'profile_image' => $profileImage
    //     // ]);

    //     return response()->json([ 'success' => 'Profile Image successfully uploaded' ]);

    // }

}
