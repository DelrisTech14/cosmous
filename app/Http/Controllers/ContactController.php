<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;

class contactController extends Controller
{

    public function index()
    {
        $data['app'] = DB::select('SELECT * FROM settings');
        return view('contact.view', compact('data'));
    }
}