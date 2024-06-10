<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\banner;
use Illuminate\Support\Facades\Auth;

class appsController extends Controller
{

    public function index() {
        // $dashboardUsData = dashboarduses::all();
        $data['app'] = DB::select('SELECT * FROM settings');
        
        return view('layouts.apps', compact('data'));
    }

}