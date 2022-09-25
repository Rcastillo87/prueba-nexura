<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empleado extends Model
{
    public $timestamps = false;
    protected $table = 'empleado';
    protected $fillable = [
        "nombre",
        "email",
        "sexo",
        "area_id",
        "boletin",
        "descripcion"
    ];

    public function Consulta_Lista_Empleados( $id )
    {
        $sql = "SELECT e.*, a.nombre as area_nombre FROM empleado e 
        INNER JOIN areas a on e.area_id = a.id $id";
        $lista = DB::select($sql);
        return $lista;
    }

}
