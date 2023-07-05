<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\SetsOfCriteria;

class CriteriaController extends Controller
{
    public function index() {
        $datas = Criteria::all();
        return view('pages.criteria.index', compact('datas'));
    }
}
