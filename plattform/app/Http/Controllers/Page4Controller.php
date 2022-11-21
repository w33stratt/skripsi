<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page4;
use Illuminate\Support\Facades\Validator;
use Response;
use File;
class Page4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page4 = Page4::all();
        return response([
            'success' => true,
            'message' => 'Berhasil mengambil data.',
            'total_data' => count($page4),
            'data' => $page4,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
             {
              
                $page4 = new Page4 ;
                $page4->title = $request->input('title');
                $page4->desc = $request->input('desc');
              
                $page4->save();
    
                return Response([
                    'success' => true,
                    'message' => 'Berhasil menambahkan data.',
                    
                    'data' => $page4,
                ], 201);
            }
    
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
           
            $title = $request->title;
            $desc = $request->desc;
        
           
            $page4 = Page4::find($id);
            $page4->title = $title ? $title : $page4->title;
            $page4->desc = $desc? $desc : $page4->desc;
  
         
            $page4->save();

            if ($page4) {
                // $data = Pelatihan::find($id);
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil update.',
                   
                    'data' => $page4,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal update data.',
                   
                    'data' => $page4,
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
        
        $page4 = Page4::find($id);
        $page4->delete();

        return "data berhasil di hapus";
    }

    public function getDetail($id)
    {
        $page4 = Page4::find($id);
        if ($page4) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil mendapatkan detail pelatihan.',
                
                'data' => $page4,
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
