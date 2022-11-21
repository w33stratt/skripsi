<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Validator;
use \App\Helper\Alert;
use \App\Model\Kriteria2;
use \App\Model\Page3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;

class kriteria2Controller extends Controller
{
    public function boot()
    {

        View::make('pelamar', "daf");
    }

    public function index(Request $request)
    {
        // $client = new \GuzzleHttp\Client();
        // $request = $client->get('http://127.0.0.1:8000/api/page1');
        // $response = $request;
        $datas = Page3::all();
        // dd($datas);
        if ($request->ajax()) {
            return Datatables::of(Kriteria2::all())
                    ->setRowId(function(Kriteria2 $kriteria2){
                        return $kriteria2->id;
                    })->addColumn('aksi','admin.kriteria2.action-button')
                    ->rawColumns(['aksi'])
                    ->make(true);
        }

        return view('admin.kriteria2.index', compact('datas'));
        
    }

    // public function getKriteria2(Request $request) {
    //     if ($request->ajax()) {
    //         return Datatables::of(Kriteria2::all())
    //                 ->setRowId(function(Kriteria2 $kriteria){
    //                     return $kriteria->id;
    //                 })->addColumn('aksi','admin.kriteria.action-button2')
    //                 ->rawColumns(['aksi'])
    //                 ->make(true);
    //     }
    // }
   
    public function delete(Request $request){
        $validator = Validator::make($request->all(),[
            "id"=> "required|numeric|exists:kriteria2,id"
        ]);
        $response = ['ok'=>true];
        if($validator->fails()){
            $response['ok'] = false;
            $response['msg'] = "Id tidak valid";
        }else{
            Kriteria2::find($request->input('id'))->delete();
            $response['msg'] = "berhasil menghapus data";
        }
        return response()->json($response, 200);
    }

    
    public function store(Request $request)
    {
        # code...
        $res = ['stored'=>true];
        $validator = Validator::make($request->all(),[
        
            'wawancara' => 'required',
            'pengetahuan' => 'required',
            'testing' => 'required',
            'cv' => 'required',
            'waktu_pengerjaan' => 'required',
            'gaji' => 'required',
            'img_path' => 'required'
        ]);
        if($validator->fails()){
            $res['msg'] = Alert::errorList($validator->errors());
            $res['stored'] = false;
        }else{
            
          
            $kriteria->pendidikan = $request->input('pendidikan');
            $kriteria->wawancara = $request->input('wawancara');
            $kriteria->pengetahuan = $request->input('pengetahuan');
            $kriteria->testing = $request->input('testing');
            $kriteria->cv = $request->input('cv');
            $kriteria->waktu_pengerjaan = $request->input('waktu_pengerjaan');
            $kriteria->gaji = $request->input('gaji');
            // $kriteria->image_name = $request->input('image_name');
            $kriteria->img_path=$img_path;
            $kriteria->save();
            $res['msg'] = Alert::success("Berhasil Menambahkan Data");
        }

        return response()->json($res, 200);
    }
    public function edit($id)
    {
        $datas = kriteria2::find($id);
        
        return response()->json($datas);
    }
    public function update(Request $request)
    {
        $response = ["stored"=>true];
        
        $datas = Kriteria2::find($request->kriteria_id);
        if($datas){
            $datas->update($request->all());
            $response['msg'] ="Berhasil Memperbarui Data";
        }else{
            $response['stored'] = false;
            $response['msg']    = "Data tidak ditemukan";
        }
        return response()->json($response, 200);
    }
    
}
