<?php

namespace AdsNews\Http\Controllers\Fronts;

use AdsNews\Http\Requests;
use AdsNews\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('fronts.home.index');
    }
}
