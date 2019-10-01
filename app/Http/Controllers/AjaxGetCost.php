<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BookingType;

class AjaxGetCost extends Controller


{
    public function getCost(Request $request){

        $id = $request->input('type');


//        $type = BookingType::where("id", $id)->lists('cost', 'id');
        $type = BookingType::find($id);
        return response()->json(['employees' => $type]);



    }
}
