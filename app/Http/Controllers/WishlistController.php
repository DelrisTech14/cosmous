<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\wishlist;
use Illuminate\Support\Facades\Auth;

class wishlistController extends Controller
{

    public function index()
    {
        $data['app'] = DB::select('SELECT * FROM settings');
        return view('wishlist.view', compact('data'));
    }
}