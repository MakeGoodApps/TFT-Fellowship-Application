<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function basic()
    {
        return view('dashboard.basic');
    }
}
