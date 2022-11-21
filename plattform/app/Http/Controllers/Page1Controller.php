<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page1;
use App\Models\Kriteria;
use Illuminate\Support\Facades\Validator;
use Response;
use File;
class Page1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page1 = Page1::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil data.',
            'total_data' => count($page1),
            'data' => $page1,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    // public function upload(Request $request){
    //     $imagesName =[];
    //     $response =[];
    
    //     $validator = Validator::make($request->all(),
    //     [
    //         'images' => 'required', 
    //         'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048' 
    //     ]
    //     );
    
    //     if($validator->fails()) {
    //         return response()->json(["status" => "failed","message" => "Validator error", "errors" => $validator->errors()]); 
    //     }
    //     if($request->has('images')) {
    //          foreach($request->file('images') as $image) {
    //             $filename = Str::random(32).".".$image->getClientOriginalExtension();
    //             $image->move('uploads/', $filename);
    
    //             Image::create([
    //                 'image_name' =>$filename
    //             ]);
    //          }
    
    //          $response["status"] = "success";
    //          $response["message"] = "Success! image(s) uploaded";
    //     }
    
    //     else{
            
    //         $response["status"] = "failed";
    //         $response["message"] = "Failed! image(s) not uploaded";
    //     }
    
    //     return response()->json($response);
    // }
    public function create(request $request)
    {
        // dd($request->all());
        $img_path = "";
        if ($request->img_path != null) {
            $file = $request->file('img_path');
            $fileName = time() . md5(time()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/uploads/image_path/', $fileName);
            $img_path = '/uploads/image_path/' . $fileName;
        }
        // if ($request->hasFile('img_path')) {
        //     $img = $request->file('img_path');
        //     $img_path = date('YmdHis') . '.' . $img->getClientOriginalExtension();
        //     $path = '/upload';
        //     $destinationPath = public_path($path);
        //     $img->move($destinationPath, $img_path);
        //     $upload_data['img_path'] = $path.'/'.$img_path;
        //     // dd($input['image']);
        // }
        $page1 = new Page1 ;
        $page1->name = $request->input('name');
        $page1->email = $request->input('email');
        $page1->pendidikan = $request->input('pendidikan');
        
        $page1->experience = $request->input('experience');
        // $page1->img_path = $request->input('img_path');
        $page1->img_path=$img_path;
        // $page1->wawancara = $request->input('wawancara');
        if ($page1->experience >= 2) {
            $status = 'lulus';
            $data_kriteria = [
                'name' => $request->input('name'),
                'pendidikan' => $request->input('pendidikan'),
                'wawancara' => $request->input('wawancara'),
                'pengetahuan' => $request->input('pengetahuan'),
                'testing' => $request->input('testing'),
                'cv' => $request->input('cv'),
                'waktu_pengerjaan' => $request->input('waktu_pengerjaan'),
                'gaji' => $request->input('gaji'),
                
                'img_path' => $img_path
            ];

            $kriteria = Kriteria::create($data_kriteria);
        }else{
            $status = 'tidak lulus';
        }
        $page1->status = $status;
        
        $page1->save();

        
        $response = [
            'success' => true,
            'message' => 'you have regist',
            'data' => $page1
        ];
        return Response($response);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);
        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Kiriman data tidak sesuai.',
                'data' => $validator->errors(),
            ], 401);
        } else {
           
            $name = $request->name;
            $email = $request->email;
            $pendidikan = $request->pendidikan;
           
           
            $page1 = Page1::find($id);
            $page1->name = $name ? $name : $page1->name;
            $page1->email = $emal? $email : $page1->email;
            $page1->pendidikan = $pendidikan? $pendidikan : $page1->pendidikan;
       
            
         
            $page1->save();

            if ($page1) {
                // $data = Pelatihan::find($id);
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil update.',
                   
                    'data' => $page1,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal update data.',
                   
                    'data' => $page1,
                ], 400);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function soft_delete($id)
    {
        
        $page1 = Page1::find($id);
        $page1->delete();

        return "data berhasil di hapus";
    }

    public function getDetail($id)
    {
        $page1 = Page1::find($id);
        if ($page1) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil mendapatkan detail pelatihan.',
                
                'data' => $page1,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pelatihan tidak ditemukan.',
                'data' => '',
            ], 400);
        }
    }

}
