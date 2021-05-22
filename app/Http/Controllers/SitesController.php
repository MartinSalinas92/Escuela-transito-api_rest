<?php

namespace App\Http\Controllers;

use App\Models\sites;
use App\Models\address;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateSitio;
use App\Http\Requests\CrearAddress;
use App\Http\Requests\BuscarporBarrio;


class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sitios=sites::with('address')->take(10)->get();

        return response()->json($sitios);
    }

    public function indexxbarrio(BuscarporBarrio $request){

        $barrio=address::where('neighborhood', $request->barrio)->get();

        return response()->json($barrio);

    }


    public function store(CrearAddress $request){

        $infocalle=[

            'neighborhood'=>$request->nombre_barrio,
            'street'=>$request->nombre_calle,
            'nro_house'=>$request->numero_sitio,
            'info_add'=>$request->info_add

        ];

        $address=address::create($infocalle);

        sites::create([

            'name'=>$request->nombre_sitio,
            'address_id'=>$address->id



        ]);

        return response()->json([

            'res'=>true,
            'message'=>'se ha creado el sitio correctamente'

        ], 200);



    }
    public function update(UpdateSitio $request, sites $sites, $id)
    {

        $barrio=[


            'neighborhood'=>$request->nombre_barrio,
            'street'=>$request->nombre_calle,
            'nro_house'=>$request->numero_sitio,
            'info_add'=>$request->info_add

        ];

        address::where('id', $request->barrio_id)->update($barrio);

        sites::where('id',$id)->update([

            'name'=>$request->nombre_sitio,


        ]);

        return response()->json([

            'res'=>true,
            'message'=>'se ha modificado correctamente'

        ], 200);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sites  $sites
     * @return \Illuminate\Http\Response
     */
    public function destroy(sites $sites)
    {
        //
    }
}
