<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\persons;
use App\Models\postulante;
use Illuminate\Http\Request;
use App\Models\curso_por_postulantes;
use App\Http\Requests\UpdatePostulante;
use App\Http\Requests\createStorePostulantes;
use App\Http\Requests\BuscarPostulantesporDNi;

use function PHPUnit\Framework\isNull;

class PostulanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $postulante=postulante::with('person','direccion', 'cursos')->get();








        return response()->json($postulante);




    }

    public function indexPorDni(BuscarPostulantesporDNi $request)
    {
        $dni=$request->dni;

        $personas=persons::where('dni',$dni)->get();


        return response()->json($personas);
    }


    public function store(createStorePostulantes $request)
    {

        if(!is_null($request)){


            $persona=[
                'name' => $request->nombre,
                'last_name'=>$request->apellido,
                'dni'=>$request->dni,
                'number_tel'=>$request->telefono,
                'date_birth'=>$request->fecha_nacimiento
            ];

            $personas=persons::create($persona);

            $barrio=[
                'neighborhood'=>$request->barrio,
                'street'=>$request->direccion
            ];
            $barrios=address::create($barrio);

            $postulante=postulante::create([
                'person_id'=>$personas->id,
                'tipo_licencia'=>$request->tipo_licencia,
                'address_id'=>$barrios->id,

            ]);

            $cursoXpostulantes=[
                'course_id'=>$request->curso_id,
                'postulante_id'=>$postulante->id
            ];

            curso_por_postulantes::create($cursoXpostulantes);




            return response()->json([

                'res'=>true,
                'message'=>'el postulante se ha creado correctamente'
            ], 200);

        }else{

            return response()->json([

                'res'=>false,
                'message'=>'no se puedo guardar el postulante'

            ], 400);

        }


    }


    public function update(UpdatePostulante $request, $id){



        $persona=[
            'name'=>$request->nombre,
            'last_name'=>$request->apellido,
            'dni'=>$request->dni,
            'number_tel'=>$request->telefono,
            'date_birth'=>$request->fecha_nacimiento


        ];
            persons::where('id', $request->id_persona)->update($persona);

        $barrio=[

            'neighborhood'=>$request->barrio,
            'street'=>$request->direccion
        ];

         address::where('id', $request->id_barrio)->update($barrio);

        postulante::where('id',$id)->update([


            'tipo_licencia'=>$request->tipo_licencia]);




        return response()->json([
            'res'=>true,
            'message'=>'se ha modificado correctamente'
        ], 200);




    }


}
