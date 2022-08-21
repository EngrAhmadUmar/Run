<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profileUpdate(Request $request){

        $user = User::where('id', Auth::id());

         $update = $user->update(
             $request->all()
         );

        if($update){
            return response("Profile updated successfully");
        } else{
            return response("Error occured while updating profile");
        }

    }
}
