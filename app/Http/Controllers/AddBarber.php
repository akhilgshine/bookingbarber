<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barber;

class AddBarber extends Controller
{
    public function submit(Request $request){



        $validatedData = $request->validate([
            'barbername' => 'required',

        ]);


        $barber = new Barber;

        $barber->barbername = $request->input('barbername');


        $barber->save();

        return redirect()->back()->with('message', 'Barber Added Successfully!');
//        return redirect('/homepage');

    }
}
