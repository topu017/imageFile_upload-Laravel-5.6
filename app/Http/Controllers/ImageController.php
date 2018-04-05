<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    public function index(){
        $images = Image::all();
        return view('index')->with('images', $images);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        //dd('Ok');
        $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable|image',
        ]);

        $image = new Image;
        $image->title = $request->title;

        if($request->hasFile('image')){
            //store
            $image->image = $request->image->store('public/images');
        }
        $image->save();
        return redirect()->route('index');
    }
}
