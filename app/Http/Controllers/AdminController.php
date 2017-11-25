<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home-admin');
    }

    public function kainput()
    {
        return view('admin.input-ka');
    }

    public function kalist()
    {
        return view('admin.list-ka');
    }

    public function beritainput()
    {
        return view('admin.input-berita');
    }

    public function beritalist()
    {
        return view('admin.list-berita');
    }

    public function reservelist()
    {
        return view('admin.list-reservasi');
    }
}
