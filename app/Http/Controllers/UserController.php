<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function GetUser(){
        $user= User::with('phone')->whereId(1)->first();
        return Response::json($user);
    }
}
