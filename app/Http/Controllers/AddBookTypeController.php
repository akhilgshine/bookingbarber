<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BookingType;

class AddBookTypeController extends Controller
{
    public function submit(Request $request){


        
        $validatedData = $request->validate([
            'type' => 'required',
            'cost' => 'required',
            'duration' => 'required'

        ]);


        $addbooktype = new BookingType;

        
        $addbooktype->type = $request->input('type');
         
        $addbooktype->cost = $request->input('cost');

        $addbooktype->duration = $request->input('duration');

        
        $addbooktype->save();

        return redirect()->back()->with('addbooktype', 'Book Type added');


    }
}
