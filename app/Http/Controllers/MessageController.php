<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessageController extends Controller
{
    
    public function submit(Request $request){


//        $this->validate($request,[
//            'title' => 'required|unique:posts|max:255',
//            'author.name' => 'required',
//            'author.description' => 'required',
//        ]);

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'

        ]);


        $message = new Message;

        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        $message->save();

        return redirect()->back()->with('message', 'Message Send!');
//        return redirect('/homepage');

    }

    public function index()
    {
    }
    public function show($id)
    {
        $message= Message::find($id);
        return view('messages.show')->with('message','$message');
    }
}
