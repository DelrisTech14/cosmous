<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\banner;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{

    public function index() {
        // $dashboardUsData = dashboarduses::all();
        $data['banner'] = DB::select('SELECT * FROM banners');
        $data['product'] = DB::select('SELECT * FROM products');
        $data['app'] = DB::select('SELECT * FROM settings');
        // echo "<pre>";
        // print_r($data['product']);
        // die;
        // echo "</pre>";
        return view('dashboard.view', compact('data'));
    }

}