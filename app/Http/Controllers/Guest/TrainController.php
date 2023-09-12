<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

// Models

use App\Models\Train;

class TrainController extends Controller
{

    public function home(){

        $currentTime=carbon::now('Europe/Rome');
        
        $trains=Train::where('departure_time', '>', $currentTime->toTimeString())
                        ->get();

        return view('home', compact('trains'));
    }
}
