<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\train;

class MainController extends Controller
{
    public function index(){
        $trains = train::all();

        return view ('welcome', compact('trains'));
    }
}
