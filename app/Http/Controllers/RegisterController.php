<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
class RegisterController extends Controller
{
    public function showregister(Request $request)
    {
     

        return view('/admin.register.register');
    }
}
