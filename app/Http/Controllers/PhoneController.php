<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Phone;
use App\Models\User;
use DB;

class PhoneController extends Controller
{
    public function PhoneData(){
        $phone= Phone::with('user')->whereId(1)->first();
        return Response::json($phone);

        // $phone= Phone::find(1);
        // $user= User::find(2);

        // $phone->user()->associate($user)->save();
        // return "saved";

    }

}
