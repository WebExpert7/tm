<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addr = auth()->user()->eth_addr;
        $prev = auth()->user()->eth_prev;
        $keystorage = auth()->user()->eth_keystorage;
        $secretSeed = auth()->user()->eth_secretseed;

        return view('home/index_dashboard', ['addr' => $addr, 'prev' => $prev, 'keystorage' => $keystorage, 'secretSeed' => $secretSeed]);
        // return $this->userDetails->first_name;
        
    }
}
