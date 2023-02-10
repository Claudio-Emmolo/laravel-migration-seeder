<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Import DB
use App\Models\Train;


class PageController extends Controller
{
    public function index()
    {
        $trainList = Train::all();
        return view('home', compact($trainList));
    }
}
