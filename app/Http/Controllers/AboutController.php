<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\about;
use Illuminate\Support\Facades\Auth;

class aboutController extends Controller
{

    public function index() {
        // $aboutUsData = aboutuses::all();
        $data['aboutus'] = DB::select('SELECT * FROM aboutuses');
        $data['expert'] = DB::select('SELECT * FROM experts');
        $data['testimonial'] = DB::select('SELECT * FROM testimonials');
        $data['app'] = DB::select('SELECT * FROM settings');
        return view('about.view', compact('data'));
    }

}