<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    public function index() {
        $datas = Alternative::all();
        return view('pages.alternative.index', compact('datas'));
    }
}
