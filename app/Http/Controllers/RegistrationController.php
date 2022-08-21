<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use ManeOlawale\Laravel\Termii\Facades\Termii;

// use Hash;
// use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    function index(){
        return view('login');
    }

    function validate_login(Request $request){
        // Check for validation
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect('dashboard');
        }
        return redirect('login')->with('success', 'Login details are not valid');

    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    function dashboard(){
        // if(Auth::user()->hasRole('user')){
            return view('dashboard');
        // } else {
        //     return view('login');
        // }
        // $otp = Termii::OTP('login_account');

        // # Set Number
        // $otp->to('2349023747076');

        // # Set text
        // $otp->text('{pin} is your account RUN activation code');

        // # Send the OTP
        // $otp->start();
        // if(Auth::check()){
        //     return view('login');
        // }
        // return redirect('login')->with('success', "Please log in first.");
    }

    function registration(){
        return view('login');
    }

    function sendtoken(){
        $curl = curl_init();
        $data = array( "api_key" => env('TERMII_API_KEY', 'default_value'),
                    "message_type" => "NUMERIC",
                    "to" => "09023747076",
                    "from" => "Run",
             "channel" => "dnd",
             "pin_attempts" => 10,
             "pin_time_to_live" =>  5,
             "pin_length" => 6,
             "pin_placeholder" => "< 1234 >",
             "message_text" => "Your pin is < 1234 >",
             "pin_type" => "NUMERIC");

        $post_data = json_encode($data);

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.ng.termii.com/api/sms/otp/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post_data,
        CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    function validate_registration(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|min:8'
        ]);
        $data = $request->all();
        
        $otp = Termii::OTP('login_account');

        # Set Number
        $otp->to($data['phone_number']);
        // $otp->to('2349023747076');

        $otppin = '{pin}';

        # Set text
        $otp->text('{pin} is your RUN account activation code');

        # Send the OTP
        $otp->start();

        // echo $otppin;

        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
            'otp_code' => $otppin
        ]);

        return redirect('login')->with('success', 'registration complete');
    }

    // function logout(){

    // }
}