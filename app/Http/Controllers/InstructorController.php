<?php

namespace App\Http\Controllers;

use App\Models\persons;
use App\Models\instructor;
use Illuminate\Http\Request;
use App\Http\Requests\CreateInstructor;
use App\Http\Requests\UpdateInstructores;
use App\Http\Requests\BuscarInstructorporDni;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $instructor=instructor::with('person')->take(10)->get();

        return response()->json($instructor);




    }

    public function indexxdni(BuscarInstructorporDni $request){

        $dni=$request->dni;

        $personas=persons::where('dni',$dni)->get();


        return response()->json($personas);


    }


    public function store(CreateInstructor $request)
    {
            $persona=[
                'last_name'=>$request->apellido,
                'name'=>$request->nombre,
                'dni'=>$request->dni,
                'date_birth'=>$request->fecha_nacimiento,
                'number_tel'=>$request->telefono
            ];


            $personas=persons::create($persona);

            $instructor=[
                'person_id'=>$personas->id
            ];

            instructor::create($instructor);

            return response()->json([

                'res'=>true,
                'message'=>"se ha guardado correctamente"


            ], 200);

    }


    public function update(UpdateInstructores $request, instructor $instructor, $id)
    {

        $persona=[
            'last_name'=>$request->apellido,
            'name'=>$request->nombre,
            'dni'=>$request->dni,
            'date_birth'=>$request->fecha_nacimiento,
            'number_tel'=>$request->telefono
        ];

       persons::where('id', $request->id_persona)->update($persona);

       instructor::where('id', $id)->update([

            'status'=>$request->status

       ]);


       return response()->json([

            'res'=>true,
            'message'=>'se ha modificado correctamente'
       ],200);




    }


}
