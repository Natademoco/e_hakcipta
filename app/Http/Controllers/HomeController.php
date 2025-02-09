<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('dashboard');
    }

    public function tampilSejarah()
    {
        return view('sejarah');
    }

    public function tampilHakCipta()
    {
        return view('hakcipta');
    }

    public function tampilPascaHakCipta()
    {
        return view('pascahakcipta');
    }
    public function tampilDaftarPascaCiptaan()
    {
        return view('daftarpascaciptaan');
    }
}
