<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\account;
use Illuminate\Support\Facades\Auth;

class accountController extends Controller
{

    public function index()
    {
        $data['app'] = DB::select('SELECT * FROM settings');
        return view('account.view', compact('data'));
    }
}