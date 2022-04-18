<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getAll()
    {
        $data = User::get();

        return response()->json($data,200);
    }

    public function create(Request $request)
    {
        $data['nombre'] = $request['nombre'];
        $data['apellidos'] = $request['apellidos'];
        $data['email'] = $request['email'];
        $data['telefono'] = $request['telefono'];
        $data['provincia'] = $request['provincia'];
        $data['ciudad'] = $request['ciudad'];
        $data['usuario'] = $request['usuario'];
        $data['password'] = $request['password'];
        User::create($data);

        return response()->json([
            'message' => "Usuario creado Correctamente",
            'success' => true
        ], 200);
    }

    public function delete($id)
    {
        $res = User::find($id)->delete();

        return response()->json([
            'message' => "Usuario borrado Correctamente",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = User::find($id);

        return response()->json($data, 200);
    }

    public function update(Request $request,$id){
        $data['nombre'] = $request['nombre'];
        $data['apellidos'] = $request['apellidos'];
        $data['email'] = $request['email'];
        $data['telefono'] = $request['telefono'];
        $data['provincia'] = $request['provincia'];
        $data['ciudad'] = $request['ciudad'];
        $data['foto'] = $request['foto'];
        $data['usuario'] = $request['usuario'];
        $data['password'] = $request['password'];
        User::find($id)->update($data);

        return response()->json([
            'message' => "Usuario actualizado Correctamente",
            'success' => true
        ], 200);
    }

}
