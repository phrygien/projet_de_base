<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnneescolaireController extends Controller
{
    public function __construct()
    {
        
    }

    public function pageAnneescolaire()
    {
        return view('anneescolaires.page');
    }
}
