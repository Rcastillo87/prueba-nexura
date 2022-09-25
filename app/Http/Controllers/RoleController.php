<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    
    public function ListaRoles()
    {
        return Role::All();
    }

    public function ListaRolesxEmpleado(Request $request)
    {
        //$validated = $request->validate([
        $validator = Validator::make($request->all(), [ 
            'id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $role = new Role;
        $lista = $role->ConsultaRolesxEmpleado($request->id);

        if( count($lista) < 1){
            return response()->json(['errors' => "No se encontro data",], 422);
        }

        return $lista;
    }

}
