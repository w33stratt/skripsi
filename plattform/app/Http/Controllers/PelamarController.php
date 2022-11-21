<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pelamar;
use Str;
class PelamarController extends Controller
{

    public function index() {
        $pelamars = Pelamar::all();
        return response()->json(["status" => "success", "count" => count($pelamars), "data" => $pelamars]);
    }

    public function upload(Request $request){
    $pelamarsName =[];
    $response =[];

    $validator = Validator::make($request->all(),
    [
        'pelamars' => 'required', 
        'pelamars.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048' 
    ]
    );

    if($validator->fails()) {
        return response()->json(["status" => "failed","message" => "Validator error", "errors" => $validator->errors()]); 
    }
    if($request->has('pelamars')) {
         foreach($request->file('pelamars') as $image) {
            $filename = Str::random(32).".".$image->getClientOriginalExtension();
            $image->move('uploads/', $filename);

            Pelamar::create([
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

