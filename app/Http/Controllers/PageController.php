<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $date = $now->toDateString();
        // $time = $now->toTimeString();
        // var_dump($time);
        

        $trains = Train::all();
        $trains_today = Train::where('departure_date','>=', $date)->orderBy('departure_date')->get();
        $trains_gone = Train::where('departure_date','<=', $date)->orderBy('departure_time', 'desc')->get();
        // dd($movies);

        return view("home", compact("trains", "trains_today", "trains_gone"));
    }
}
