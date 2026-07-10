<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
class GalleryController extends Controller
{
    //
    public function index()
    {

    $galleries = Gallery::all();
    return view('index', compact('galleries'));
    }




    public function create()
    {
        return view('create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('images'), $imageName);

        Gallery::create([
            'name' => $request->name,
            'photo' => $imageName,
        ]);

        return redirect()->route('gallery.index')
                        ->with('success','Image uploaded successfully.');
    }


}
