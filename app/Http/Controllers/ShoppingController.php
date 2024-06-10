<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\shopping;
use Illuminate\Support\Facades\Auth;

class shoppingController extends Controller
{

    public function index()
    {
        $data['app'] = DB::select('SELECT * FROM settings');
        $data['banner'] = DB::select('SELECT * FROM banners');
        $data['product'] = DB::select('SELECT * FROM products');
        return view('shopping.view', compact('data'));
    }
}