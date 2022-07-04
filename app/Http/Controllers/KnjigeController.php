<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Knjiga;
use DB;

class KnjigeController extends Controller
{
    public function index()
    {
        $knjige = DB::table('knjige')->get();
        return view("knjige");
    }
}
