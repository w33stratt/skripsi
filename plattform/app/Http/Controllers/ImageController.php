<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Image;
use Str;
class ImageController extends Controller
{

    public function index() {
        $images = Image::all();
        return response()->json(["status" => "success", "count" => count($images), "data" => $images]);
    }

    public function upload(Request $request){
    $imagesName =[];
    $response =[];

    $validator = Validator::make($request->all(),
    [
        'images' => 'required', 
        'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048' 
    ]
    );

    if($validator->fails()) {
        return response()->json(["status" => "failed","message" => "Validator error", "errors" => $validator->errors()]); 
    }
    if($request->has('images')) {
         foreach($request->file('images') as $image) {
            $filename = Str::random(32).".".$image->getClientOriginalExtension();
            $image->move('uploads/', $filename);

            Image::create([
                'name' =>$request->name,
                'image_name' =>$filename
            ]);
         }

         $response["status"] = "success";
         $response["message"] = "Success! image(s) uploaded";
    }

    else{
        
        $response["status"] = "failed";
        $response["message"] = "Failed! image(s) not uploaded";
    }

    return response()->json($response);
}
}

