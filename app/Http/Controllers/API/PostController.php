<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function getAll()
    {
        $data = Post::get();

        return response()->json($data,200);
    }

    public function create(Request $request)
    {
        $data['titulo'] = $request['titulo'];
        $data['texto'] = $request['texto'];
        // $data['fechaPost'] = $request['fechaPost'];
        $data['idUsuario'] = $request['idUsuario'];
        $data['idCategoria'] = $request['idCategoria'];
        Post::create($data);

        return response()->json([
            'message' => "Post creado Correctamente",
            'success' => true
        ], 200);
    }

    public function delete($id)
    {
        $res = Post::find($id)->delete();

        return response()->json([
            'message' => "Post borrado Correctamente",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = Post::find($id);

        return response()->json($data, 200);
    }

    public function update(Request $request,$id){
        $data['titulo'] = $request['titulo'];
        $data['texto'] = $request['texto'];
        // $data['fechaPost'] = $request['fechaPost'];
        $data['idUsuario'] = $request['idUsuario'];
        $data['idCategoria'] = $request['idCategoria'];
        Post::find($id)->update($data);

        return response()->json([
            'message' => "Post actualizado Correctamente",
            'success' => true
        ], 200);
    }
}
