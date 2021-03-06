<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trains;

class TrainController extends Controller
{
    public function index() {

        $trains = Trains::all();
        $data = ['trains' => $trains];
        return view('trains.Home' , $data);
    }

    public function show(Trains $trains) //findOrFail
    {
        return view('trains.show', ['trains' => $trains]);
    }
}
