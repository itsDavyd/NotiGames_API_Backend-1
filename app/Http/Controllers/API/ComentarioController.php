<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    //
    public function getAll()
    {
        $data = Comentario::get();

        return response()->json($data,200);
    }

    public function create(Request $request)
    {
        $data['comentario'] = $request['comentario'];
        $data['fechaComentario'] = $request['fechaComentario'];
        $data['idPost'] = $request['idPost'];
        $data['idUser'] = $request['idUser'];
        Comentario::create($data);

        return response()->json([
            'message' => "Comentario creado Correctamente",
            'success' => true
        ], 200);
    }

    public function delete($id)
    {
        $res = Comentario::find($id)->delete();

        return response()->json([
            'message' => "Comentario borrado Correctamente",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = Comentario::find($id);

        return response()->json($data, 200);
    }

    public function update(Request $request,$id)
    {
        $data['comentario'] = $request['comentario'];
        Comentario::find($id)->update($data);

        return response()->json([
            'message' => "Comentario actualizado Correctamente",
            'success' => true
        ], 200);
    }
}
