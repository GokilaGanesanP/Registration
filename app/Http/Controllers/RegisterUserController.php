<?php

namespace App\Http\Controllers;
use App\Jobs\SendWelcomeEmail;
use App\Models\RegisteredUser;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }
    
    public function SendEmail(Request $request)
    {

      
        RegisteredUser :: create($request->all());
        $user = 'gokila.ganesan@aspiresys.com';
        SendWelcomeEmail::dispatch($user);
        return redirect()->route('register')->with('success', 'User Regitration Completed');

    }

 




}


