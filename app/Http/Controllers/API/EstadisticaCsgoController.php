<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadisticaCsgo;

class EstadisticaCsgoController extends Controller
{
    //
    public function getAll()
    {
        $data = EstadisticaCsgo::get();
        
        return response()->json($data,200);
    }

    public function create(Request $request)
    {
        $data['nHoras'] = $request['nHoras'];
        $data['mmr'] = $request['mmr'];
        $data['nKills'] = $request['nKills'];
        $data['nMuertes'] = $request['nMuertes'];
        $data['idCategoria'] = $request['idCategoria'];
        $data['idUsuario'] = $request['idUsuario'];
        EstadisticaCsgo::create($data);

        return response()->json([
            'message' => "Estadistica de Counter Strike creada Correctamente",
            'success' => true
        ], 200);
    }

    public function delete($id)
    {
        $res = EstadisticaCsgo::find($id)->delete();

        return response()->json([
            'message' => "Estadistica de Counter Strike borrada Correctamente",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = EstadisticaCsgo::find($id);

        return response()->json($data, 200);
    }

    public function update(Request $request,$id)
    {
        $data['nHoras'] = $request['nHoras'];
        $data['mmr'] = $request['mmr'];
        $data['nKills'] = $request['nKills'];
        $data['nMuertes'] = $request['nMuertes'];
        EstadisticaCsgo::find($id)->update($data);

        return response()->json([
            'message' => "Estadistica de Counter Strike actualizado Correctamente",
            'success' => true
        ], 200);
    }
}
