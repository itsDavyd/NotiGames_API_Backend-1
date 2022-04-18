<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function getAll()
    {
        $data = Categoria::get();
        
        return response()->json($data,200);
    }

    public function create(Request $request)
    {
        $data['nombre'] = $request['nombre'];
        Categoria::create($data);

        return response()->json([
            'message' => "Categoria creada Correctamente",
            'success' => true
        ], 200);
    }

    public function delete($id)
    {
        $res = Categoria::find($id)->delete();

        return response()->json([
            'message' => "Categoria borrada Correctamente",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = Categoria::find($id);

        return response()->json($data, 200);
    }

    public function update(Request $request,$id){
        $data['nombre'] = $request['nombre'];
        Categoria::find($id)->update($data);

        return response()->json([
            'message' => "Categoria actualizado Correctamente",
            'success' => true
        ], 200);
    }
}
