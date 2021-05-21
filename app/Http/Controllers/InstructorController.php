<?php

namespace App\Http\Controllers;

use App\Models\instructor;
use Illuminate\Http\Request;
use App\Http\Requests\CreateInstructor;
use App\Models\persons;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {

        $instructor=instructor::with('person')->get();

        return response()->json($instructor);




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


    public function update(Request $request, instructor $instructor)
    {
        //
    }


}
