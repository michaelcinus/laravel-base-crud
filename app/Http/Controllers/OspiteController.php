<?php

namespace App\Http\Controllers;

use App\Ospite;
use Illuminate\Http\Request;

class OspiteController extends Controller
{
     public function index() {

        $ospiti = Ospite::all();
        return view('ospiti', compact('ospiti'));

     }
}
