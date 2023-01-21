<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcoleController extends Controller
{
    public function ecolePage()
    {
        return view('ecoles.page');
    }
}
