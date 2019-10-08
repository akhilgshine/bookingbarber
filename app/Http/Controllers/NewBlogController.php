<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class NewBlogController extends Controller
{
    public function submit(Request $request){



        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'

        ]);


        $newblog = new Blog;

        $newblog->title = $request->input('title');
        $newblog->image = $request->input('image');
//                if ($request->hasfile('image')) {
//                      $file = $request->file('image');
////                     $extension = $file->getClientOriginalExtension(); // getting image extension
////                      $filename = time() . '.' . $extension;
//                      $file->move('public/images/', $file);
//
//          //see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
//          //a folder->upload and appsetting, and it wil store the images in your file.
//
//                     $newblog->image = $file;
//                  } else {
//                    return $request;
//                     $newblog->image = '';
//                 }
        $newblog->description = $request->input('description');

        $newblog->save();

        return redirect()->back()->with('newblog', 'Blog added');


    }
}
