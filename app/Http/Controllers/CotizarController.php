<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotizarController extends Controller
{
    public function directory()
    {
            return view('cotizar');
        }
    
}