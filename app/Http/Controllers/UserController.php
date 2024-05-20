<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use App\Models\Phone;
use DB;

class UserController extends Controller
{
    public function GetUser(){
        $user= User::with('phone')->whereId(1)->first();
        return Response::json($user);


        // to update record
        // $user =User::find(1);
        // $phone = new Phone();
        // $phone->phone='9898989898';

        // $user->phone()->update($phone->toArray());
        // return "saved";
        // print_r($user);
        // exit;
    }
}
