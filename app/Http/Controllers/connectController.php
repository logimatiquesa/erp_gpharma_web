<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class connectController extends Controller
{
    public function connect(){
        
        $value = DB::table('AGENCE')->select()->get();
       
    }
}
