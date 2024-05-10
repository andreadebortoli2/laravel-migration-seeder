<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('guests.index', compact('trains'));
    }

    public function show()
    {
        $todayTrains = Train::where('departure_time', '>=', date(today()))->get();
        // $todayTrains = Train::where('departure_time', '>=', '2024-05-10%')->get();
        return view('guests.show', compact('todayTrains'));
    }
}
