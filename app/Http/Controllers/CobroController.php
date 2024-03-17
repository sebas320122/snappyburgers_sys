<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cobros;

class CobroController extends Controller
{
    public function showCobrar(){
        return view('cobrar');
    }

    
}
