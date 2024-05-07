<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index() {
        for ($i=0; $i < 10; $i++) { 
            echo "Ini adalah pengulangan ke-$i<br>";
        }
        return view('looping');
    }
}
