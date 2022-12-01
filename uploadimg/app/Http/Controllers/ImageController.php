<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function image(Request $req){

        if($req->hasfile('images')){
            $image=$req->file('images');
            $response=$image->store('images','public');
            //dd(asset('/storage', $response));
            //dd($response);

            return back();

        }
    }
}
