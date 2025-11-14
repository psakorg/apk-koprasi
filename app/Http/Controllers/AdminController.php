<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect('/dashboard')->with('error', 'Akses ditolak!');
        }

        return view('admin.dashboard');
    }
}
