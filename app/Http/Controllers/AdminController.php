<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminBerita()
    {
        return view('admin.dashboard.berita');
    }
}
