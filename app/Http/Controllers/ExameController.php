<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExameController extends Controller
{
    public function index()
    {
        return view('exame.index');
    }
}
