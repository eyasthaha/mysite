<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function addGallery(Request $request){

        // $images = request()->all();
        $images = $request->all();


        foreach($images as $image){

            $filename = microtime(true).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('storage/gallery'), $filename);

            Gallery::create([
                'image' => $filename
            ]);

        }

        // return response()->json('success','Image Added');
    }

    public function getGallery(){

        $galleryData = Gallery::all();

        return response()->json( $galleryData );

    }
}
