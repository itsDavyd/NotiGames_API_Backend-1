<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadisticaLol;

class EstadisticaLolController extends Controller
{
    //
    public function getAll()
    {
        $data = EstadisticaLol::get();
        
        return response()->json($data,200);
    }

    public function create(Request $request)
    {
        $data['nHoras'] = $request['nHoras'];
        $data['mmr'] = $request['mmr'];
        $data['rol'] = $request['rol'];
        $data['idCategoria'] = $request['idCategoria'];
        $data['idUsuario'] = $request['idUsuario'];
        EstadisticaLol::create($data);

        return response()->json([
            'message' => "Estadistica de League of Legends creada Correctamente",
            'success' => true
        ], 200);
    }

    public function delete($id)
    {
        $res = EstadisticaLol::find($id)->delete();

        return response()->json([
            'message' => "Estadistica de League of Legends borrada Correctamente",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = EstadisticaLol::find($id);

        return response()->json($data, 200);
    }

    public function update(Request $request,$id)
    {
        $data['nHoras'] = $request['nHoras'];
        $data['mmr'] = $request['mmr'];
        $data['rol'] = $request['rol'];
        
        EstadisticaLol::find($id)->update($data);

        return response()->json([
            'message' => "Estadistica de League of Legends actualizado Correctamente",
            'success' => true
        ], 200);
    }
}
