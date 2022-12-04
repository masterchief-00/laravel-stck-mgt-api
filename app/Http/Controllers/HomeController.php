<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:ADM|WHS|DLV']);
    }
    public function index()
    {
        $user = auth()->user();
        return view('home', compact('user'));
    }
}
