<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class GmapsController extends Controller
{
    public function gmaps()
    {
    	$gmaps_models = DB::table('gmaps_models')->get();
    	return view('gmaps',compact('gmaps_models'));
    }

}
