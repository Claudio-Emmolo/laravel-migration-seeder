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
        $dateNow = date('Y-m-d'); // To day, for example
        $trainList = Train::where('orario_partenza', '>', $dateNow)->orderBy('orario_partenza', 'ASC')->get();
        return view('home', compact('trainList', 'dateNow'));
    }
}
