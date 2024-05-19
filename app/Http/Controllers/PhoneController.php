<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Phone;
use DB;

class PhoneController extends Controller
{
    public function PhoneData(){
        $phone= Phone::with('user')->whereId(1)->first();
        return Response::json($phone);
    }
}
