<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class HomeController extends Controller
{
    public function index() {
        $travel_agency = Travel::all();

        $data = [
            'travels_agency' => $travel_agency
        ];

        return view('home');
    }   
}
