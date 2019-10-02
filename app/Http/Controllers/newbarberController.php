<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class newBarberController extends Controller
{
    
    function insert(Request $req)
    {
        $name= $req->input('name');
        DB::table('barbers')->insert($name);
        echo "success";
    }
    
}
