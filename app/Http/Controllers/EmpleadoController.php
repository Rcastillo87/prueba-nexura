<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Role;
use App\Models\Area;
use App\Models\RolxEmpleado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmpleadoController extends Controller
{
    public function Lista_Empleados(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //$validated = $request->validate([
            'id' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $role = new Role;
        $Empleado =  new Empleado;

        if (is_null($request->id)) {
            $lista = $Empleado->Consulta_Lista_Empleados("");
        } else {
            $lista = $Empleado->Consulta_Lista_Empleados(" where e.id = $request->id");
        }

        if (count($lista) < 1) {
            return response()->json(['errors' => "No se encontro data",], 422);
        } else {
            $data = [];
            foreach ($lista as $key => $value) {
                $value->roles = $role->ConsultaRolesxEmpleado($value->id);
                $data[] = $value;
            }
            return $data;
        }
    }

    public function Crear_Empleados(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'nullable|integer',
            "nombre" => 'required',
            "email" => 'required|string|email',
            "sexo" => 'required|max:1',
            "area_id" => 'required|integer',
            "boletin" => 'nullable',
            "descripcion" => 'required',
            "roles.*.id" =>  'required|integer', //'required|array'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }


        $existe = Area::find($request->area_id);
        if (is_null($existe)) {
            return response()->json(['errors' => "No se encontro data area_id",], 422);
        }

        $req_roles =  $request->roles;
        foreach ($req_roles as $key => $value) {
            $existe = Role::find($value);
            if (is_null($existe)) {
                return response()->json(['errors' => "No se encontro data role_id",], 422);
            }
        }

        $data = $request->All();
        if (isset($data['boletin'])) {
            $data['boletin'] = "1";
        } else {
            $data['boletin'] = "0";
        }

        DB::beginTransaction();
        try {
            $Empleado = new Empleado;
            $RolxEmpleado = new RolxEmpleado;
            if (is_null($request->id)) {
                $create = $Empleado->create($data);
                //echo "wefwe";
                foreach ($req_roles as $key => $value) {
                    RolxEmpleado::create([
                        'rol_id' => $value,
                        'empleado_id' => $create['id']
                    ]);
                }
                DB::commit();
                return response()->json(['message' => "Se ha creado la data con exito",], 200);
            } else {
                $upd = Empleado::findorfail($request->id);
                $upd->update($data);
                RolxEmpleado::where('empleado_id', $request->id)->delete();
                foreach ($req_roles as $key => $value) {
                    RolxEmpleado::create([
                        'rol_id' => $value,
                        'empleado_id' => $request->id
                    ]);
                }
                DB::commit();
                return response()->json(['message' => "Se ha actualizado la data con exito",], 200);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function Eliminar_Empleado(Request $request)
    {
        //$validated = $request->validate([
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $existe = RolxEmpleado::where('empleado_id', $request->id)->get();
        if (count($existe) == 0) {
            return response()->json(['errors' => "No se encontro roles asociados",], 422);
        }

        $existe = Empleado::find($request->id);
        if (is_null($existe)) {
            return response()->json(['errors' => "No se encontro Empleado",], 422);
        }

        DB::beginTransaction();
        try {

            RolxEmpleado::where('empleado_id', $request->id)->delete();
            Empleado::where('id', $request->id)->delete();
            DB::commit();
            return response()->json(['message' => "Se ha eliminado la data con exito",], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function index()
    {

        $Empleado =  new Empleado;
        $lista_Empleado = $Empleado->Consulta_Lista_Empleados("");
        $lista_Rol = Role::All();
        $lista_Area = Area::All();

        return View('formulario')
            ->with('empleados',  $lista_Empleado)
            ->with('roles', $lista_Rol)
            ->with('areas', $lista_Area);
    }

    public function Crear_Empleados_web(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'nullable|integer',
            "nombre" => 'required',
            "email" => 'required|string|email',
            "sexo" => 'required|max:1',
            "area_id" => 'required|integer',
            "boletin" => 'nullable',
            "descripcion" => 'required',
            "roles.*" =>  'required|integer', //'required|array'
        ]);

        if ($validator->fails()) {
            echo "<script type='text/javascript'>
            alert(' Erro al validar la data');
            window.location.href='formulario';
            </script>";
        }


        $existe = Area::find($request->area_id);
        if (is_null($existe)) {
            echo "<script type='text/javascript'>
            alert('No se encontro data area_id');
            window.location.href='formulario';
            </script>";
        }

        $req_roles =  $request->roles;
        foreach ($req_roles as $key => $value) {
            $existe = Role::find($value);
            if (is_null($existe)) {
                echo "<script type='text/javascript'>
                alert('No se encontro data role_id');
                window.location.href='formulario';
                </script>";
            }
        }

        $data = $request->All();
        if (isset($data['boletin'])) {
            $data['boletin'] = "1";
        } else {
            $data['boletin'] = "0";
        }

        DB::beginTransaction();
        try {

            $Empleado = new Empleado;
            $RolxEmpleado = new RolxEmpleado;
            if (is_null($request->id)) {
                $create = $Empleado->create($data);
                //echo "wefwe";
                foreach ($req_roles as $key => $value) {
                    RolxEmpleado::create([
                        'rol_id' => $value,
                        'empleado_id' => $create['id']
                    ]);
                }
                DB::commit();
                echo "<script type='text/javascript'>
                alert('Se creo con exito el empleado');
                window.location.href='formulario';
                </script>";
                //return redirect('formulario');
            } else {
                $upd = Empleado::findorfail($request->id);
                $upd->update($data);
                RolxEmpleado::where('empleado_id', $request->id)->delete();
                foreach ($req_roles as $key => $value) {
                    RolxEmpleado::create([
                        'rol_id' => $value,
                        'empleado_id' => $request->id
                    ]);
                }
                DB::commit();
                echo "<script type='text/javascript'>
                alert('Se actualizo con exito el empleado');
                window.location.href='formulario';
                </script>";
                //return redirect('formulario');
            }
        } catch (\Exception $e) {
            DB::rollback();
            echo "<script> alert('" . $e->getMessage() . "'); </script>";
            return redirect('formulario');
        }
    }


    public function Eliminar_Empleado_web(Request $request)
    {
        //$validated = $request->validate([
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            echo "<script type='text/javascript'>
            alert(' Erro al validar la data');
            window.location.href='formulario';
            </script>";
        }

        $existe = RolxEmpleado::where('empleado_id', $request->id)->get();
        if (count($existe) == 0) {
            echo "<script type='text/javascript'>
            alert('No se encontro roles asociados' );
            window.location.href='formulario';
            </script>";
        }

        $existe = Empleado::find($request->id);
        if (is_null($existe)) {
            echo "<script type='text/javascript'>
            alert('No se encontro Empleado' );
            window.location.href='formulario';
            </script>";
        }

        DB::beginTransaction();
        try {

            RolxEmpleado::where('empleado_id', $request->id)->delete();
            Empleado::where('id', $request->id)->delete();
            DB::commit();
            echo "<script type='text/javascript'>
            alert('Se elimino con exito el empleado');
            window.location.href='formulario';
            </script>";
            //return redirect('formulario');
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }
}
