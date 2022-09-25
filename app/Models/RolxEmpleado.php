<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolxEmpleado extends Model
{
    public $timestamps = false;
    protected $table = 'empleado_rol';
    protected $fillable = [
        "empleado_id",
        "rol_id"
    ];
}
