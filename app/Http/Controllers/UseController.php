<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CrearUsusarios;

class UseController extends Controller
{

    public function store(CrearUsusarios $request)
    {
        $resul=$request->all();
        $resul['password']=Hash::make($request->password);

        User::create($resul);



            return response()->json([

                'res'=>true,
                'message'=>"se ha registrado correctamente"

            ], 200);





    }

    public function login(Request $request){

        $user=User::whereEmail($request->email)->first();
        if(!is_null($user) && Hash::check($request->password, $user->password)){

            $token= $user->createToken('larave-muni')->accessToken;


            return response()->json([

                'res'=>true,
                'token'=> $token,
                'message'=>'Bienvenido al sistema'

            ], 200);
        }else{
            return response()->json([

                'res'=>false,

                'message'=>'Usuario o password incorrecto'

            ], 400);
        }



    }
}
