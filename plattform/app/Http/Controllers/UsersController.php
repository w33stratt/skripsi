<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response([
            'success' => true,
            'message' => 'Berhasil mengambil data.',
            'total_data' => count($users),
            'data' => $users,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
       
        $users = new User ;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->token = $request->token;
        $users->save();

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

        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->token = $request->token;
        $users->save();

        if ($users) {
            // $data = Pelatihan::find($id);
            return response()->json([
                'success' => true,
                'message' => 'Berhasil update pelatihan.',
                
                'data' => $users,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal update pelatihan.',
                
                'data' => $users,
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
        $users = User::find($id);
        if ($users) {
        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil data.',
            'data' => $users,
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
