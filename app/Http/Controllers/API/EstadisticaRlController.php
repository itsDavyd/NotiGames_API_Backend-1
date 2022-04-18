<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadisticaRl;

class EstadisticaRlController extends Controller
{
    //
    public function getAll()
    {
        $data = EstadisticaRl::get();
        
        return response()->json($data,200);
    }

    public function create(Request $request)
    {
        $data['nHoras'] = $request['nHoras'];
        $data['mmr'] = $request['mmr'];
        $data['nGoles'] = $request['nGoles'];
        $data['nSaves'] = $request['nSaves'];
        $data['idCategoria'] = $request['idCategoria'];
        $data['idUsuario'] = $request['idUsuario'];
        EstadisticaRl::create($data);

        return response()->json([
            'message' => "Estadistica de Rocket League creada Correctamente",
            'success' => true
        ], 200);
    }

    public function delete($id)
    {
        $res = EstadisticaRl::find($id)->delete();

        return response()->json([
            'message' => "Estadistica de Rocket League borrada Correctamente",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = EstadisticaRl::find($id);

        return response()->json($data, 200);
    }

    public function update(Request $request,$id)
    {
        $data['nHoras'] = $request['nHoras'];
        $data['mmr'] = $request['mmr'];
        $data['nGoles'] = $request['nGoles'];
        $data['nSaves'] = $request['nSaves'];
        EstadisticaRl::find($id)->update($data);

        return response()->json([
            'message' => "Estadistica de Rocket League actualizado Correctamente",
            'success' => true
        ], 200);
    }
}
