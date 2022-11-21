<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Validator;
use \App\Helper\Alert;
use \App\Model\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;


class ImageController extends Controller
{

    
    public function index(Request $request)
    {
        // $client = new \GuzzleHttp\Client();
        // $request = $client->get('http://127.0.0.1:8000/api/page1');
        // $response = $request;
        $datas = Image::all();
        // dd($datas);
        if ($request->ajax()) {
            return Datatables::of(Image::all())
                    ->setRowId(function(Image $image){
                        return $image->id;
                    })->addColumn('aksi','admin.kriteria.action-button')
                    ->rawColumns(['aksi'])
                    ->make(true);
        }

        return view('admin.kriteria.index', compact('datas'));
        
    }

}
