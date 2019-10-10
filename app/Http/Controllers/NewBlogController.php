<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use Illuminate\Support\Facades\Input;
use File;
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

        $data = $this->uploadFile('image','Images');

        $newblog->image = $data['filename'];
        $newblog->description = $request->input('description');

        $newblog->save();

        return redirect()->back()->with('newblog', 'Blog added');


    }

    public function uploadFile($fileInput = 'image', $filePath = 'Images/') {

        $destinationPath = public_path($filePath);
        $returnFilename = null;
        $result = array('success' => false, 'error' => '', 'filepath' => '');
        $file = is_object($fileInput) ? $fileInput : Input::file($fileInput);

        if ((is_object($fileInput) || Input::hasFile($fileInput)) && $file->isValid()) {

            $fileName = strtolower($file->getClientOriginalName());
            $fileName = preg_replace("/[^a-z0-9\_\-\.]/i",'',$fileName);
            $file_parts = pathinfo($fileName);
            $file_ext = $file_parts['extension'];
            $file_name = $file_parts['filename'] . "-" . str_random(15);
            $i = 0;
            $extra = '';
            while (file_exists($destinationPath . $file_name . $extra . '.' . $file_ext)) {
                $i++;
                $extra = '-' . $i;
            }
            $fileName = $file_name . $extra . '.' . $file_ext;


            if (!File::isDirectory($destinationPath)) {
                // path does not exist
                File::makeDirectory($destinationPath, 0755);
            }

            if ($file->move($destinationPath, $fileName)) {
                $result['filepath'] = $filePath.'/'.$fileName;
                $result['filename'] = $fileName;
                $result['file_ext'] = $file_ext;
                $result['success'] = true;
            }
        } else {
            $result['error'] = 'No file selected or Invalid file.';
        }

        return $result;
    }
}