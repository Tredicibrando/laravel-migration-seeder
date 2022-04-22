<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        // $trains = Train::all();
        $date = '2022-04-21';
        $trains = Train::where('data_di_partenza','2022-04-21')->get();
        return view('home', compact('trains'));
    }
}
