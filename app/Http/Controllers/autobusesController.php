<?php

namespace App\Http\Controllers;
use App\Models\autobuses;

use Illuminate\Http\Request;

class autobusesController extends Controller
{
    public function index()
    {
        $autobuses = autobuses::all();

        return view('autobuses.index', compact('autobuses'));
    }
}
