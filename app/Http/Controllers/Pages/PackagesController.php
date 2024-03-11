<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        return view('layouts.pages_._package.index');
    }
}
