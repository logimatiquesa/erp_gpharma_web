<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class infoAdministrationController extends Controller
{
    public function infoAdminView()
    {
        session()->put("IDPERSONNEL", 1);

        session()->put("NomPrenomPersonnel", "Anderson");
        session()->put("MPssePersonnel", "andi");
        session()->put("IDPaysProprietaire", 1);

        return view("pages.administration.info_administration");
    }
}