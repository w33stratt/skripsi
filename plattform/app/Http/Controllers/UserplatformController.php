<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userplatform;
class UserplatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Userplatform::all();
        return response([
            'success' => true,
            'message' => 'Berhasil mengambil data.',
            'total_data' => count($userplatforms),
            'data' => $userplatforms,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
       
        $user = new Userplatform ;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->token = $request->token;
        $user->save();

        return response()->json(['message' => 'Data added successfully'], 201);
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
    public function show($id)
    {
        //
    }

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
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $token = $request->token;

        $user = Userplatform::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->token = $request->token;
        $user->save();

        if ($user) {
            // $data = Pelatihan::find($id);
            return response()->json([
                'success' => true,
                'message' => 'Berhasil update pelatihan.',
                
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal update pelatihan.',
                
                'data' => $user,
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getDetail($id)
    {
        $user = Userplatform::find($id);
        if ($user) {
        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil data.',
            'data' => $user,
        ], 200);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan.',
            'data' => '',
        ], 400);
    }
}
}

