<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Booking;
use App\SlotTaken;
Use Redirect;


class BookingController extends Controller
{
    function getBarber(Request $request){


        $booking = new Booking;
        $booking->name = $request->input('name');
        $booking->email = $request->input('email');
        $booking->number = $request->input('mobile');
        $booking->barber_id = $request->input('barber');
        $booking->type_id = $request->input('booking_type');
        $time =$request->input('time');
        $date =$request->input('date');
        $booking->booked_time  = date('Y-m-d H:i:s', strtotime("$date $time"));
        $slots = $this->check_slot_taken($booking->barber_id,$booking->booked_time);
        if(isset($slots->id))
        {
            return Redirect::back()->withErrors(['This Slot has been taken, Please choose another slot']);
        }
        else
        {
            $booking->save();
            $current_booking_id = $booking->id;
            $slot_taken = new SlotTaken;
            $slot_taken->booked_id = $current_booking_id;
            $slot_taken->save();
            return redirect()->back()->with('success', 'Your Booking is Successfull done!');
        }



    }
    function check_slot_taken($barber_id,$booked_time)
    {
        $data = Booking::select('id')
            ->where('booked_time',$booked_time)
            ->where('barber_id',$barber_id)
            ->first();
        return $data;
    }
}