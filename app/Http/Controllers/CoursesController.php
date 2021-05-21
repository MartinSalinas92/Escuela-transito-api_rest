<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\instructor;
use App\Models\sites;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



            $course=courses::with('instructor','sitios')->get();





        return response()->json($course);

    }

    public function store(CreateCourseRequest $request)
    {
            $course=$request->all();

            if(!empty($course)){

                courses::create($course);

            return response()->json([

                'res'=>true,
                'message'=>'se ha registrado correctamente',

            ],200);

            }else{
                return response()->json([

                'res'=> false,
                'status'=>404,
                'message'=>'array vacio'
                ],400);
            }


    }

    public function update(UpdateCourseRequest $request, courses $courses, $id)
    {
        $course=$request->all();

        courses::where('id', $id)->update($course);

        //$courses->updated($course);

        return response()->json([

            'res'=>true,
            'status'=>200,
            'message'=>'se ha modificado correctamente'

        ],200);


    }


}
