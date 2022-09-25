<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'roles';
    protected $fillable = [
        "nombre"
    ];

    public function ConsultaRolesxEmpleado( $id )
    {
        $sql = "SELECT r.id, r.nombre FROM empleado_rol er 
        INNER JOIN roles r on er.rol_id = r.id
        where er.empleado_id =  $id";
        $lista = DB::select($sql);
        return $lista;
    }
}
