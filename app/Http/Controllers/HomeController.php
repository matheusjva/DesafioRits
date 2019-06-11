<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidatos;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $candidatos = DB::table('candidatos')->get()->all();

        return view('home', compact('candidatos'));
    }
}
