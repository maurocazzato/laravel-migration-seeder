<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->toDateString();
        $trains = Train::whereDate('departure_time', $today)->get();

        return view('pages.index', compact('trains'));
    }
}

