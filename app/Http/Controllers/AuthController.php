<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        //mempermudah pemanggilan data inputan user
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        //object user
        $user = new User([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);
        
        //respon berhasil
        if ($user->save()){
            $user->signin = [
                'href' => 'api/v1/user/signin',
                'method' => 'POST',
                'params' => 'email, password'
            ];
            $response = [
                'msg' => 'User Created',
                'user' => $user
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg' => 'An Error Occured'
        ];
        return response()->json($response, 404);

    }

    public function signin(Request $request)
    {
        return 'it works';
    }
}
