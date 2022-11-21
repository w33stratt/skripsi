<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Models\Userplatform;

class AuthController extends Controller
{
    public function register(Request $request)
    {
       //set validation
       $validator = Validator::make($request->all(), [
        'name'      => 'required',
        'email'     => 'required|email|unique:users',
        'password'  => 'required|min:8|confirmed'
    ]);

    //if validation fails
    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }

    //create user
    $user = Userplatform::create([
        'name'      => $request->name,
        'email'     => $request->email,
        'password'  => bcrypt($request->password)
    ]);

    //return response JSON user is created
    if($user) {
        return response()->json([
            'success' => true,
            'user'    => $user,  
        ], 201);
    }

    //return JSON process insert failed 
    return response()->json([
        'success' => false,
    ], 409);
}

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return response()
                ->json(['message' => 'email atau password salah'], 401);
        }

        $user = Userplatform::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi '.$user->name.', selamat datang','access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    // method for user logout and delete token
    public function logout()
    {
        //remove token
        $removeToken = JWTAuth::invalidate(JWTAuth::getToken());

        if($removeToken) {
            //return response JSON
            return response()->json([
                'success' => true,
                'message' => 'Logout Berhasil!',  
            ]);
        }
    }
}