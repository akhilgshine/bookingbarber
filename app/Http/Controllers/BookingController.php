<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Barber;
use App\BookingSlots;


class BookingController extends Controller
{
    function getBarber(Request $request){



        $barbers = Barber::all();
        $slots = BookingSlots::all();

        return view('barber') ->with('barbers',$barbers)->with('slots',$slots);
    }
}
