<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function compareMdp(Request $request){
        if($request->mdp == session()->get("mdpUser")){
            return["ok"=>true];
        }
        return "non";
    }
}
