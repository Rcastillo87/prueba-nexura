<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


Route::get('/areas', [AreaController::class, 'ListaAreas']);
Route::get('/roles', [RoleController::class, 'ListaRoles']);
Route::get('/rolesxempleado', [RoleController::class, 'ListaRolesxEmpleado']);
Route::get('/empleados', [EmpleadoController::class, 'Lista_Empleados']);
Route::get('/crear_empleados', [EmpleadoController::class, 'Crear_Empleados']);
Route::get('/eliminar_empleado', [EmpleadoController::class, 'Eliminar_Empleado']);


Route::get('/formulario', [EmpleadoController::class, 'index']);
Route::get('/Crear_Empleados_web', [EmpleadoController::class, 'Crear_Empleados_web']);
Route::get('/Eliminar_Empleado_web', [EmpleadoController::class, 'Eliminar_Empleado_web']);
